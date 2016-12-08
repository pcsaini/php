<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 12:33 PM
 */

class authcheck{

    public function __construct()
    {
        $this->model = new auth_model();
        $this->helper = new helper();
    }
    public function logged_in(){
        if ($this->model->logged_in()){
            return true;
        }
        else {
            return false;
        }
    }
}