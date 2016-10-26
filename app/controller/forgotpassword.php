<?php
require "../init.php";


if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
    if (email_exists($_POST['email']) === true) {
        //recover($_GET['mode'], $_POST['email']);
        header('Location: ../view/forgotpassword.php?success');
        exit();
    } else {
        header('Location: ../view/forgotpassword.php?errors=Email Address not Found');
    }
}
