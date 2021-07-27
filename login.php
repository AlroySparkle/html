<?php
    session_start();
    clearstatcache();
    if(isset($_SESSION["username"])){
        header("Location:main.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mainDesign.css">
    <link rel="stylesheet" href="login.css">
    <script src="/html/sources/jquery.js"></script>
    <script src="login.js"></script>
</head>

<body>
    <div class="container">
        <div class="logo">
            <a href="#"><img alt=""></a>
        </div>
        <div class="choices">
            <ul>
                <li><a href="#">main</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">anime</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">merchandise</a></li>
            </ul>
        </div>
        <div class="icons">
            <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="hamburger">
            <i class="fas fa-bars" id="hamburger"></i>
        </div>
    </div>
    <div class="login-container">
        <img src="/sources/images/Dream-Land-Logo.png" alt="" class="logo">
        <p>user</p>
        <input type="text" class="username" id="username">
        <p>password</p>
        <input type="text" class="password" id="password">
        <button id="login">login</button>
        <div id="err">username or password is wrong</div>
        <a href="#" class="forget-password">forget password?</a>

    </div>
</body>

</html>