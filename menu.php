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
    <?php 
        include('includes/header.php');
    ?>

    <div class="sample-section-wrap">
        <div class="sample-section">
            <div class="content" id="menu">
                <div class="line"></div>

                <h1>Search Menu</h1>
                <div class="line"></div>
                <div class="padding"></div>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for pizzas..">
                <h3>All Pizzas</h3>

                <!-- Modal -->
                <div id="modal" class="modal">
                    <div class="pizzaModal">
                        <img class="allePizzas" src="" alt="pizza">
                        <h3 class="prijs">prijs: $69.69</h3>
                    </div>
                </div>

                <ul id="myUL">
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Margherita<img class="pizzas"
                                        src="assets/img/okpizza.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Kaas<img class="pizzas"
                                        src="assets/img/pizza-1.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Kaas<img class="pizzas"
                                        src="assets/img/pizza-1.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Kaas<img class="pizzas"
                                        src="assets/img/pizza-1.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Kaas<img class="pizzas"
                                        src="assets/img/pizza-1.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Kaas<img class="pizzas"
                                        src="assets/img/pizza-1.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv">
                                <a style="" class="pizza_naam">Kaas<img class="pizzas"
                                        src="assets/img/pizza-1.png" alt="pizza">Klik voor de details...</a>
                            </div>
                        </li>
                    </div>

                    <!-- <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">Pepperoni<img class="pizzas"
                                        src="assets/img/okpizza.png" alt="pizza">Klik voor de details...</a></div>
                            <div id="id02" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-2.png" alt="Pepperoni">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">Tonno<img class="pizzas" src="assets/img/okpizza.png"
                                        alt="pizza">Klik voor de details...</a></div>
                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">4 Cheese<img class="pizzas" src="assets/img/okpizza.png"
                                        alt="pizza">Klik voor de details...</a></div>
                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">Hete Kip<img class="pizzas" src="assets/img/okpizza.png"
                                        alt="pizza">Klik voor de details...</a></div>
                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">Shoarma<img class="pizzas" src="assets/img/okpizza.png"
                                        alt="pizza">Klik voor de details...</a></div>
                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">Pulled Chicken<img class="pizzas"
                                        src="assets/img/okpizza.png" alt="pizza">Klik voor de details...</a></div>
                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">Hawaii<img class="pizzas" src="assets/img/okpizza.png"
                                        alt="pizza">Klik voor de details...</a></div>
                            <div id="id01" class="modal">

                                <form class="modal-content animate" action="order.php" method="post">

                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">

                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="menuPizza">
                        <li>
                            <div class="menuDiv"><a onclick="document.getElementById('id01').style.display='block'"
                                    style="" class="pizza_naam">BBQ Chicken<img class="pizzas"
                                        src="assets/img/okpizza.png" alt="pizza">Klik voor de details...</a>
                            </div>
                            <div id="id01" class="modal">
                                <form class="modal-content animate" action="order.php" method="post">
                                    <img class="allePizzas" src="assets/img/pizza-1.png" alt="ok">
                                </form>
                            </div>
                        </li>
                    </div> -->
                </ul>
                <div class="padding"></div>
                <div class="padding"></div>
                <div class="padding"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <?php 
            include('includes/footer.php');
        ?>

    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>