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

//print_r($errors);
function logged_in()
{
    //print_r($_SESSION['user_id']);
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
    //return (isset($_SESSION['user_id'])) ? true : false;
}

function delete()
{
    print_r("hello");
}
