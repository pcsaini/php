<?php


require '../init.php';
//require "../controller/login.php";

delete();
if (logged_in()) {
	print_r("Yse");
}
else{
	print_r("not");
}