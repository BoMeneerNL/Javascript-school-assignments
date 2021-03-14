<?php session_start?>

<?php require 'scripts/php-prl/header.php'?>
    <title id="title">何もなしで何を達成できるか</title>
        <link rel="stylesheet" href="scripts/css/main.css">
    </head>
    <body>
        <!--login part-->
        <input type="text" id="username" name="gebruikersnaam" placeholder="Gebruikersnaam" />
        <input type="password" id="password" name="wachtwoord" placeholder="Wachtwoord" />
        <button id="dellog" onclick="login()">Login</button>

        <!--content-->
        <p id="welcome">Welcome to this site, if you want to see the whole site, login.</p>
        <p id="loghidden" style="visibility: hidden;">BigChungus</p>
        <!--Choose the way-->
        <button id="yesb1" onclick="rebuild1()" style="display: none;">do an action</button>
        <button id="nob1"  style="display: none;"><a href="no-php.html">leave</a></button>
        <br /><br />
        <!--Choose the action-->
        <p id="message.1" style="display: none;">What do you want to do?</p>
        <br /><button id="btn1.class1" onclick="email()" style="display: none;">email</button>
        <br /><button id="btn2.class1" style="display: none;"></button>
        <br /><button id="btn3.class1" style="display: none;"onclick="location.href = 'http://jeff.bopedia.org/mc.disp1.mp4';">Something ;)</button>
        <img id="email.empty" src="emptyemail.jpg" alt="F Something went wrong, image not loaded" style="display: none;">
<?php include_once 'scripts/php-prl/footer.php'?>