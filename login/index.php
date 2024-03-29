<!DOCTYPE html>
<html lang="en">
<?php
session_start();
session_unset();
session_destroy();
//echo $_SESSION["user_details"]["user_id"];
    ?>

<head>
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta charset="utf-8">
    
    <link rel="shotcut icon" type="img/png" href="../images/logo.png">

    <!--    <link rel="shotcut icon" type="img/png" href="Images/icon.png">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Poppins:300,400,500,600,700,900|Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="validate.js"></script>
    <title>Login | SignUp</title>
</head>

<body>

    <div class="loader">
        <div class="loader__main">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="popup">

        <div class="popup__close"><i class="material-icons">
                close
            </i></div>

        <div class="popup__heading">Password Recovery</div>

        <form id="forget_password_form" class="pform">
            <div class="input__heading">Enter your mobile number</div>
            <input type="number" id="phone_no" name="phone_no" class="input">
            <input type="submit" class="btn">
        </form>
        <div id="forget_notify" class="notify"></div>
    </div>

    <div class="header">
        <a href="../index.html"><img src="../images/logo.png" alt="" class="header__logo"></a>
        <div class="header__heading">The Initiative</div>
    </div>
    <div class="formContainer">

<!--
        <div class="controller">
            <div class="controller__btn btnActive" id="loginBtn">Login</div>
            <div class="controller__btn" id="signUpBtn">Signup</div>
        </div>
-->

        <form id="login_form" class="form loginForm">
            <div class="form__heading">Login</div>
            <p style="font-size: 18px;color: red;" id="error_msg_login"></p>

            <input type="number" name="mobile_no_login" id="mobile_no_login" placeholder="Mobile" class="input">
            <span id="mobile_error" class="l"> </span>

            <input type="password" name="password_login" id="password_login" placeholder="Password" class="input">
            <span id="password_login_error" class="l"> </span>

            <input type="submit" id="submit" value="Login">

            <div class="fpwd">Forgot your password?</div>

        </form>
   <!--     <form id="signup_form" class="form registerFrom hide">
            <div class="form__heading">Signup</div>
            <p style="font-size: 18px;" id="error_msg"></p>

            <input type="number" name="mobile_no" id="mobile_no" placeholder="Mobile Number" class="input">
            <span id="mobile_no_error" class="s"> </span>

            <input type="text" name="email" id="email" placeholder="Email" class="input">
            <span id="email_error" class="s"> </span>

            <input type="password" name="password" id="password" placeholder="Password" class="input">
            <span id="password_error" class="s"> </span>

            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="input">
            <span id="confirm_password_error" class="s"> </span>

            <input type="submit" id="signup_submit" value="Register">

        </form>-->

    </div>
    <!--
    <div class="contacts">

        <a href="https://www.facebook.com/theinitiative.akg/" class="icons" target="_blank">
            <svg class="svgIcons">
                <use xlink:href="../svg/svgIcons.svg#facebook"></use>
            </svg>
        </a>
        <a href="https://www.instagram.com/csi_akgec/" class="icons" target="_blank">
            <svg class="svgIcons">
                <use xlink:href="../svg/svgIcons.svg#instagram"></use>
            </svg>
        </a>

        <a href="https://www.youtube.com/channel/UCrxGbgXygspoAIk5zhOClVQ" class="icons" target="_blank">
            <svg class="svgIcons">
                <use xlink:href="../svg/svgIcons.svg#youtube"></use>
            </svg>
        </a>
    </div>
    -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v3.2'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

    <div class="fb-customerchat" attribution=setup_tool page_id="2274447382801951">
    </div>

</body>
<script type="text/javascript" src="signup_ajax.js"></script>

</html>
