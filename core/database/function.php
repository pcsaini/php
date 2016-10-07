<?php
/**
 * Created by PhpStorm.
 * User: pcsaini779
 * Date: 07-10-2016
 * Time: 11:26 AM
 */
session_start();
include "connect.php";
/*if (logged_in() === true) {
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id,'user_id','username','password','frist_name','last_name','email');
    if (user_active($user_data['username']) === false) {
        session_destroy();
        header('Location: index.php');
    }
}*/