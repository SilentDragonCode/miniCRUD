<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Config</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
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