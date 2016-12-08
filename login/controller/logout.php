<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 8:34 PM
 */

class logout{

    public function __construct()
    {
        $this->model = new auth_model();
    }

    public function index(){
        session_destroy();
        header("location: ".$GLOBALS['dynamic_url']."login");
    }
}