<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 5:19 PM
 */

session_start();
session_destroy();
header("Location: http://localhost/php/login");