<?php 
	include('functions.php');
	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Config</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
	<style>
		body {
			background-image: url('menubg.png');
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
		button[name=pizza_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - create menu item</h2>
	</div>
	
	<form method="post" action="create_menu.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Pizza name:</label>
			<input type="text" name="pizza" value="">
		</div>
		<div class="input-group">
			<label>Description:</label>
			<input type="text" name="description" >
		</div>
		<div class="input-group">
			<label>price</label>
			<input type="text" name="price">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="pizza_btn"> + Add pizza</button>
		</div>
	</form>
</body>
</html>