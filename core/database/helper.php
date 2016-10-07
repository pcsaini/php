<?php

include 'connect.php';

function db_insert($array,$tbname){
    $array_keys = array_keys($array);
    $array_keys = implode(", ",$array_keys);
    $array_values = implode("','",$array);
    $array_values = "'".$array_values."'";
    $query = mysql_query("INSERT INTO $tbname ($array_keys) VALUES ($array_values)");
    if ($query){
        return true;
    }
    else{
        return false;
    }
}

function db_select($select, $tbname, $filter=""){
    $query = mysql_query("SELECT $select FROM $tbname $filter");
    return $query;
}
function user_exists($username){
    $username = strip_tags($username);
    return (mysql_result(mysql_query("SELECT COUNT('user_id') FROM users WHERE username = '$username'"), 0) == 1) ? true : false;
}
function user_id_from_username($username){
    $username = strip_tags($username);
    return (mysql_result(mysql_query("SELECT user_id FROM users WHERE username = '$username'"), 0, 'user_id'));
}

function check($tbname, $username, $password) {
    $user_id = user_id_from_username($username);
    return (mysql_result(mysql_query("SELECT count('user_id') FROM $tbname WHERE username = '$username' AND password = '$password'"), 0)==1) ? $user_id : false;

}