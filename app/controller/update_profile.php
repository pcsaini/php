<?php
require "../init.php";
echo $_POST['first_name'];
if (empty($_POST) == false) {
    $user_id = $_SESSION['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    update_profile($user_id,$first_name,$last_name,$email,$contact_number,$address);
    header('Location: ../view/profile.php');

}

