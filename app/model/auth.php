<?php

include '../database/helper.php';
/**
 * @param $username
 * @param $password
 * @param string $remember
 * @return bool
 */
function login($username, $password)
{
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    $result = check('users', $username, $password);
    return $result;
}

function logged_in()
{
    return (isset($_SESSION['user_id'])) ? true : false;

}
function protact_page()
{
    if (logged_in() == true) {
        header('Location: index.php');
        exit();
    }
}

function login_redirect()
{
    if (logged_in() == false) {
        header('Location: login.php');
        exit();
    }
}
