<?php

require 'connect.php';
function db_insert($array, $tbname)
{
    $array_keys = array_keys($array);
    $array_keys = implode(", ", $array_keys);
    $array_values = implode("','", $array);
    $array_values = "'" . $array_values . "'";
    $query = mysql_query("INSERT INTO $tbname ($array_keys) VALUES ($array_values)");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function db_select($select, $tbname, $filter = "")
{
    $query = mysql_query("SELECT $select FROM $tbname $filter");
    return $query;
}

function user_exists($username)
{
    $username = strip_tags($username);
    return (mysql_result(mysql_query("SELECT COUNT('user_id') FROM users WHERE username = '$username'"), 0) == 1) ? true : false;
}

function user_id_from_username($username)
{
    $username = strip_tags($username);
    return (mysql_result(mysql_query("SELECT user_id FROM users WHERE username = '$username'"), 0, 'user_id'));
}

function user_id_from_email($email){
    $email = strip_tags($email);
    return (mysql_result(mysql_query("SELECT user_id FROM users WHERE email = '$email'  "), 0, 'user_id'));
}

function check($tbname, $username, $password)
{
    $user_id = user_id_from_username($username);
    $password = md5($password);
    return (mysql_result(mysql_query("SELECT count('user_id') FROM $tbname WHERE username = '$username' AND password = '$password'"), 0) == 1) ? $user_id : false;

}
function user_data($user_id){
    $data = array();
    $user_id = (int)$user_id;

    $func_num_args = func_num_args();
    $func_get_args = func_get_args();

    if ($func_num_args > 1) {
        unset($func_get_args[0]);
        $fields = '`' . implode('`, `', $func_get_args). '`';
        //echo "SELECT $fields FROM users WHERE user_id = $user_id";
        $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users WHERE user_id = $user_id"));

        return $data;
    }
}
function change_password($user_id, $new_password){
    $user_id = (int)$user_id;
    $new_password = md5($new_password);

    mysql_query("UPDATE `users` SET `password` = '$new_password' WHERE `user_id` = $user_id");
}