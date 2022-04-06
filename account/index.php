<?php 
	include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/15532d8343.js" crossorigin="anonymous"></script>
	<style>
		body {
			background-image: url('pizzabg.png');
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
	</style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="user.png"  >

			<div class="profile">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888; ">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
						<a href="create_order.php"> + place order</a>
					</small>

				<?php endif ?>
				<?php  if (!isset($_SESSION['user'])) : ?>
					<strong class="error"><i class="fa-solid fa-triangle-exclamation"></i> Oops: You are not logged in. Please <a href="login.php">login.</a></strong>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>