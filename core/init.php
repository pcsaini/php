<?php
session_start();
error_reporting(0);

require 'database/connect.php';
require 'model/auth.php';
//require 'controller/login.php';
//require 'model/auth.php';

/*if (logged_in() === true) {
    $session_user_id = $_SESSION['user_id'];

}*/