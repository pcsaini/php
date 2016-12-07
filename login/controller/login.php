<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 1:48 AM
 */
class login{

    public function __construct()
    {
        $this->model = new auth_model();

    }
    public function index(){
        if (!empty($_POST)){
            $data['post'] = $_POST;
            $username = $_POST['username'];
            $password = $_POST['password'];

            $username = strip_tags($username);
            $password = strip_tags($password);

            $password = md5($password);

            $result = $this->model->login($username,$password);
            if ($result){
                header("Location: ".$GLOBALS['dynamic_url']."home");
                die();
            }
            else{
                $data['errors'] = array(array("username and password don't match"));
            }
        }
        $data['page_title'] = "Login";
        $data['view_page'] = "users/login";
        $data['header'] = $GLOBALS['header'];
        $data['footer'] = $GLOBALS['footer'];

        return $data;
    }
}