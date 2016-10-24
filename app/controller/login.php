<?php
require "../init.php";
if (empty($_POST) == false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) === true || empty($password) === true) {
        //$errors[] = 'Please enter username and password';
        header('Location: ../view/login.php?errors=Please enter username and password');
    }
    if (user_exists($username) === false) {
        //$errors[] = 'Invailed username';
        header('Location: ../view/login.php?errors=Invailed username');
    } else {

        $login = login($username, $password);
        if ($login == false) {
            //$errors[] = 'username and password is incorrect';
            header('Location: ../view/login.php?errors=username and password is incorrect');
        } else {
            $_SESSION['user_id'] = $login;
            header('Location: ../view/index.php');
        }
    }
}

?>