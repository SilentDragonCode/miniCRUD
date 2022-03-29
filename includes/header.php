<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #000;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 10px;

        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 20px;
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
            opacity: 0.7;
        }

        h1 {
            font-weight: 500;
            opacity: 0.7;
        }

        h2 {
            font-weight: 400;
            opacity: 0.7;
        }

        .sample-section-wrap {
            position: relative;
            background-color: peru;
        }

        .sample-section {
            background-color: rgb(228, 164, 100);
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

        .line {
            height: 10px;
            width: 100%;
            background-color: black;
        }

        #menu {
            padding-left: 0px;
        }

        .icons {
            max-width: 75px;
            padding: 10px;
        }

        /* vacatures */
        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #000;
            border-radius: 20px;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 10%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
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
    <header>
    <div class="sample-header">
        <div class="sample-header-section">
            <h1 class="naam-restaurant">Pizza Days</h1>
            <h2><a href="https://www.google.nl/maps/place/150+Freston+Rd,+London+W10+6TR,+Verenigd+Koninkrijk/@51.5126514,-0.2190879,3a,75y,141.46h,78.07t/data=!3m6!1e1!3m4!1sYDF7x2ivuS_iXwPwspn01A!2e0!7i16384!8i8192!4m5!3m4!1s0x48760fd8dc26c3ab:0xbe6d24863b07ed3f!8m2!3d51.5125253!4d-0.2186964"
                    target="_blank">Locatie</a>
                | <a href="https://www.google.com" target="_blank">Contact Us</a> </h2>
        </div>

    </div>
    <div class="line"></div>
    </header>