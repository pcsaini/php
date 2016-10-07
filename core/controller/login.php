<?php

require '../model/auth.php';
if (!empty($_POST)) {
    $data['post'] = $_POST;
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) === true || empty($password) === true) {
        $errors[] = 'Please enter username and password';
    }

    elseif (user_exists($username) === false) {
        $errors[] = 'Invailed usernames';
    }
    else {
        $username = strip_tags($username);
        $password = strip_tags($password);
        $password = md5($password);
        $login = login($username, $password);

        if ($login == false){
            $errors[] = 'username and password is incorrect';
        }
        else{
            $_SESSION['user_id'] = $login;
            header('Location: ../../index.php');
        }
    }
    print_r($errors);
    die();
}