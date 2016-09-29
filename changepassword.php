<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="image/logo.ico">
    <link rel="shortcut icon" type="image/x-icon" href="image/logo.ico">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<?php
include_once "core/init.php";
include_once "navbar.php"
?>
<div class="login-logo">
    <img src="image/logo.png">
</div>
<div class="form-content">
    <div class="form">
        <h2>Change Password</h2>
        <form action="" method="post">
            <input type="password" placeholder="Current Password" id="password"/>
            <input type="password" placeholder="New Password" id="password"/>
            <input type="password" placeholder="Confirm Password" id="password"/>
            <button><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                Change Password</button>
        </form>
    </div>
</div>
<script src='js/jquery-3.1.1.min.js'></script>
<script src='bootstrap/js/bootstrap.min.js'></script>
<script src="js/main.js"></script>
</body>
</html>
