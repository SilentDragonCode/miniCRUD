<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'pizzadays');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

if (isset($_POST['pizza_btn'])) {
	menu();
}

if (isset($_POST['order_btn'])) {
	order();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO multi_login (`username`, `email`, `user_type`, `password`) 
					  VALUES('$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO multi_login (`username`, `email`, `user_type`, `password`) 
					  VALUES('$username', '$email', 'user', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');				
		}
	}
}


function menu(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $pizza, $description, $price;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$pizza       =  e($_POST['pizza']);
	$description =  e($_POST['description']);
	$price       =  e($_POST['price']);

	// form validation: ensure that the form is correctly filled
	if (empty($pizza)) { 
		array_push($errors, "Pizza is required"); 
	}
	if (empty($description)) { 
		array_push($errors, "Description is required"); 
	}
	if (empty($price)) { 
		array_push($errors, "price is required"); 
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO menu (`pizza`, `description`, `price`) 
					  VALUES('$pizza', '$description', '$price')";
			mysqli_query($db, $query);
			header('location: index.php');
	}
}

// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function order(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $pizza, $description, $price;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$adress      =  e($_POST['adress']);
	$date		 =  e($_POST['date']);
	$pizzas       =  e($_POST['pizzas']);

	// form validation: ensure that the form is correctly filled
	if (empty($adress)) { 
		array_push($errors, "Adress is required"); 
	}
	if (empty($date)) { 
		array_push($errors, "Date is required"); 
	}
	if (empty($pizzas)) { 
		array_push($errors, "Pizza's is required"); 
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO orders (`adress`, `date`, `pizzas`) 
					  VALUES('$adress', '$date', '$pizzas')";
			mysqli_query($db, $query);
			if (isAdmin()) {
				header('location: home.php');
			} else {
				header('location: index.php');
			}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM multi_login WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ./login.php");
}// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM multi_login WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

