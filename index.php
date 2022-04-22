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
            <div class="line"></div>
            <div class="content" id="menu">
                <h1>Menu info</h1>
                <h3>Specialiteit van de dag: </h3>
                Die pizza
                <br>
                <img class="pzvd" src="assets/img/pzvd.jpg" alt="Pizza Van De Dag">
                <br>
                <button onclick="location.href='menu.php'" style="">Klik hier voor het hele
                    menu...</button>
            </div>
            <div class="line"></div>
            <div class="content" id="order">
                <h1>Bestellen</h1>
                <h3>hoe werkt Pizza Days?</h3>
                <h4>1. Locatie invoeren Voer je adres in, of laat ons je positie bepalen.</h4>
                <h4>2. Kies je restaurant en gerecht
                    Waar heb je zin in? Scroll door talloze menu's en beoordelingen.</h4>
                <h4>3. Betaal en laat het eten bezorgen
                    Betaal contant of online met iDEAL, Creditcard, PayPal, Bitcoin. Eet smakelijk!</h4>

                <button onclick="location.href='account/login.php'" style="">Klik hier om je
                    bestelling te plaatsen...</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="order.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                title="Close Modal">&times;</span>
                            <img src="https://img.freepik.com/vrije-vector/vliegende-plak-van-pizza-cartoon-vectorillustratie-fast-food-concept-geisoleerde-vector-flat-cartoon-stijl_138676-1934.jpg?t=st=1645603661~exp=1645604261~hmac=bf191f473a11d80628d7b7c3441e81ee555960f54355eac0fe812887d2bbf8f4&w=740"
                                alt="Avatar" class="avatar">
                        </div>

                        <div class="container">
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname">

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw">

                            <button type="submit">Login</button>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="line"></div>
            <div class="content" id="locaties">
                <h1>Locaties</h1>
                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=nl&amp;q=heijendaalseweg%2098+(Pizza%20Days)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                            href="https://www.gps.ie/sport-gps/">fitness tracker</a></iframe></div>
            </div>
            <div class="line"></div>
            <div class="content" id="account">
                <h1>Uw Account</h1>
                <button onclick="location.href='account/login.php'" style="">Klik hier om toegang te krijgen tot je eigen account...</button>
            <div class="line"></div>
            <div class="content" id="werk">
                <h1>Facatures</h1>
                <h3></h3> <button onclick="location.href='vacatures.php'" style="">klik hier om alle
                    openstaande facatures te zien...</button>
            </div>
            <div class="line"></div>

            
        </div>
    </div>

    <?php 
        include('includes/footer.php');
    ?>

    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/index.js"></script>
</body>
</html>