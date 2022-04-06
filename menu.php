<?php 
	include('/account/functions.php');
	include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <link rel="icon"
        href="https://img.freepik.com/vrije-vector/vliegende-plak-van-pizza-cartoon-vectorillustratie-fast-food-concept-geisoleerde-vector-flat-cartoon-stijl_138676-1934.jpg?t=st=1645603661~exp=1645604261~hmac=bf191f473a11d80628d7b7c3441e81ee555960f54355eac0fe812887d2bbf8f4&w=740"
        type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="sample-section-wrap">
        <div class="sample-section">
            <div class="content" id="menu">
                <div class="line"></div>

                <h1>Search Menu</h1>
                <div class="line"></div>
                <div class="padding"></div>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for pizzas..">
                <h2>All Pizzas</h3>

                <div class="input-group">

			<?php
				$result=$conn->prepare ("SELECT pizza FROM `menu` ORDER BY `menu`.`pizza` ASC");
				$result->execute();
				foreach($result as $row){
				echo "<h3 value='".$row['pizza']."'".">".$row['pizza']."</option>";
				}
			?>			

                <div class="padding"></div>
                <div class="padding"></div>
                <div class="padding"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>