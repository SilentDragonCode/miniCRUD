<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #666;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .webmadewell {
            background-color: white;
        }

        .sample-header {
            text-align: center;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background-image: url("assets/img/background.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sample-header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: MidnightBlue;
            opacity: 0.3;
        }

        .sample-header-section {
            position: relative;
            padding: 10% 0 5%;
            max-width: 640px;
            margin-left: auto;
            margin-right: auto;
            color: #f1d0a2;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
            font-family: 'Leckerli One', cursive;
            font-size: 30px;
        }

        .naam-restaurant {
            font-size: 100px;
        }

        h1 {
            font-weight: 500;
        }

        h2 {
            font-weight: 400;
        }

        .sample-section-wrap {
            position: relative;
            background-color: white;
        }

        .sample-section {
            position: relative;
            max-width: 640px;
            margin-left: auto;
            margin-right: auto;
            padding: 40px;
        }

        a:link {
            color: #f1d0a2;
            background-color: transparent;
            text-decoration: none;
        }

        a:visited {
            color: #f1d0a2;
            background-color: transparent;
            text-decoration: none;
        }

        a:hover {
            color: beige;
            background-color: transparent;
            text-decoration: underline;
        }

        footer {
            text-align: center;
            padding: 3px;
            background-color: #1c0808;
            color: white;
        }
    </style>
    <link rel="icon"
        href="https://img.freepik.com/vrije-vector/vliegende-plak-van-pizza-cartoon-vectorillustratie-fast-food-concept-geisoleerde-vector-flat-cartoon-stijl_138676-1934.jpg?t=st=1645603661~exp=1645604261~hmac=bf191f473a11d80628d7b7c3441e81ee555960f54355eac0fe812887d2bbf8f4&w=740"
        type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sample-header">
        <div class="sample-header-section">
            <h1 class="naam-restaurant">Pizza Days</h1>
            <h2><a
                    href="https://www.google.nl/maps/place/150+Freston+Rd,+London+W10+6TR,+Verenigd+Koninkrijk/@51.5126514,-0.2190879,3a,75y,141.46h,78.07t/data=!3m6!1e1!3m4!1sYDF7x2ivuS_iXwPwspn01A!2e0!7i16384!8i8192!4m5!3m4!1s0x48760fd8dc26c3ab:0xbe6d24863b07ed3f!8m2!3d51.5125253!4d-0.2186964">Locatie</a>
                | <a href="https://www.google.com">Contact Us</a> </h2>
        </div>
    </div>
    <div class="sample-section-wrap">
        <div class="sample-section">
            <div class="content" id="menu">
                <h1>Menu info</h1>
                <h3>Specialiteit van de dag: </h3>
                ok
                <br>
                <br>
                <h3>klik hier voor het hele menu</h3>
            </div>

            <div class="content" id="order">
                <h1>Bestellen</h1>
                <h3>klik hier om te bestellen</h3>
            </div>

            <div class="content" id="locaties">
                <h1>Locaties</h1>
                <h3>klik hier voor alle locaties</h3>
            </div>

            <div class="content" id="account">
                <h1>Maak een account</h1>
                <h3>...</h3>
            </div>

            <div class="content" id="werk">
                <h1>Facatures</h1>
                <h3>klik hier om alle facatures te zien</h3>
            </div>

        </div>
    </div>

    <Footer>
        <p>Footer</p>
        <p><a>Footer Info</a></p>
    </Footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // scroll effect van header
        function parallax_height() {
            var scroll_top = $(this).scrollTop();
            var sample_section_top = $('.sample-section').offset().top;
            var header_height = $('.sample-header-section').outerHeight();
            $('.sample-section').css({ 'margin-top': header_height });
            $('.sample-header').css({ height: header_height - scroll_top });
        }
        parallax_height();

        $(window).scroll(function () {
            parallax_height();
        });


        // ...
    </script>
</body>

</html>