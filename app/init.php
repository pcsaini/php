<?php
session_start();
error_reporting(0);

require 'database/connect.php';
require 'model/auth.php';


if (logged_in() === true) {
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id,'user_id','username','password','first_name','last_name','email');
}
function protact_page(){
    if (logged_in() == false){
        header('Location: index.php');
        exit();
    }
}

