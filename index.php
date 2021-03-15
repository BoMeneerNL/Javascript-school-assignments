<?php include_once 'scripts/php-prl/header.php'?>
    <title id="title">何もなしで何を達成できるか</title>
    <link rel="stylesheet" href="scripts/css/main.css">
</head>

<body>
    <div class="bodywrapper">
        <!--login part-->
        <noscript>Oops, this website can't get hold of javascript, please enable javascript for this page</noscript>
        <input type="text" id="username" name="gebruikersnaam" placeholder="Gebruikersnaam" />
        <input type="password" id="password" name="wachtwoord" placeholder="Wachtwoord" />
        <button id="dellog" onclick="login();getcurrentlog('login')">Login</button>

        <!--content-->
        <p id="welcome">Welcome to this site, if you want to see the whole site, login.</p>
        <p id="loghidden" style="visibility: hidden;">BigChungus</p>
        <!--Choose the way-->
        <button id="yesb1" onclick="rebuild1();getcurrentlog('login>>Correct Goto > Action($ICALL)')"
            style="display: none;">do an action</button>
        <button id="nob1" onclick="logout();" style="display: none;">leave</button>
        <br /><br />

        <!--Choose the action-->
        <p id="message.1" style="display: none;">What do you want to do?</p>
        <br /><button id="btn1.class1"
            onclick="email();getcurrentlog('Opening email, mhm what shall be inside the inbox')"
            style="display: none;">email</button>
        <br /><button id="btn2.class1" style="display: none;"></button>
        <br /><button id="btn3.class1" style="display: none;"
            onclick="location.href = 'http://jeff.bopedia.org/mc.disp1.mp4';">Something ;)</button>
        <img id="email.empty" src="content/img/emptyemail.png" width="150px"
            alt="F Something went wrong, image not loaded" style="display: none;">
    </div>
    <div class="logwrapper">

<?php include_once 'scripts/php-prl/logger.php'?>
    </div>
<?php include_once 'scripts/php-prl/footer.php'?>