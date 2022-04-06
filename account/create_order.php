<?php 
	include('functions.php');
	include('../connection.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create order</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
	<style>
		body {
			background-image: url('orderbg.png');
			background-size: cover;
		}
		.header {
			opacity: 0.7;
			font-family: 'Nunito', sans-serif;
		}
		form {
			opacity: 0.7;
			font-family: 'Nunito', sans-serif;
			font-style: italic;
		}
		input {
			font-family: 'Nunito', sans-serif;
			font-style: italic;
		}
		.error {
			font-family: 'Nunito', sans-serif;
			font-style: italic;
			
		}
		.header {
			background: #003366;
		}
		button[name=order_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<?php 

	?>
	<div class="header">
		<h2>User - place order</h2>
	</div>
	
	<form method="post" action="create_order.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Adress</label>
			<input type="text" name="adress">
		</div>
		<div class="input-group">
			<label>Time/Date</label>
			<input type="datetime-local" name="date">
		</div>
		<div class="input-group">
			<label>Pizza's</label>
			<select name="pizzas" id="user_type">
				<option></option>

			<?php
				$result=$conn->prepare ("SELECT pizza FROM `menu` ORDER BY `menu`.`pizza` ASC");
				$result->execute();
				foreach($result as $row){
				echo "<option value='".$row['pizza']."'".$selected.">".$row['pizza']."</option>";
				}
			?>			

			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="order_btn"> + Place order</button>
		</div>
	</form>
</body>
</html>