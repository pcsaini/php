<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 6:54 PM
 */
class register {

    public function __construct()
    {
        $this->model = new auth_model();
    }
    public function index(){
        if (!empty($_POST)){
            $data['post'] = $_POST;
            $username_exists = $this->usernameExists($_POST['username']);
            $email_exists = $this->emailExists($_POST['email']);
            if(!$username_exists && !$email_exists){
                $final_array = array();
                $keys = array_keys($_POST);
                foreach($keys as $key) {
                    $value = strip_tags($_POST[$key]);
                    $value = trim($value);
                    if($key != "passwordverify") {
                        $final_array[$key] = $value;
                    }
                    if($key == "password") {
                        $final_array[$key] = md5($value);
                    }
                }
                $data['result'] = $this->model->register($final_array);
            }
            else{
                $errors = array();
                $errors_username = array();
                $errors_email = array();
                $errors_password = array();
                if($username_exists) {
                    $errors_username = array(array("Username Already Exists"));
                }
                if($email_exists) {
                    $errors_email = array(array("Email Already Exists"));
                }
                if($_POST['password'] !== $_POST['passwordverify']){
                    $errors_password = array(array("Password Don't Match"));
                }
                $data['errors'] = array_merge($errors,$errors_username,$errors_email,$errors_password);
            }
        }

        $data['page_title'] = "Register";
        $data['view_page'] = "users/register.php";
        $data['header'] = $GLOBALS['header'];
        $data['footer'] = $GLOBALS['footer'];
        return $data;
    }
    public function usernameExists($username) {
        $result = $this->model->checkIfExists("users","WHERE username='$username'");
        return $result;
    }

    public function emailExists($email) {
        $result = $this->model->checkIfExists("users","WHERE email='$email'");
        return $result;
    }
}