<?php
require "../database/helper.php";
function logged_in_redirect(){
    if (logged_in() === true) {
        header('Location: index.php');
        exit();
    }
}


function protecting_page(){
    if (logged_in() === false) {
        header('Location: ');
        exit();
    }
}
