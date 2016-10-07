<?php
/**
 * Created by PhpStorm.
 * User: pcsaini779
 * Date: 07-10-2016
 * Time: 11:35 AM
 */
class auth_model extends DBconfig {
    public function __construct()
    {
        $connection = new DBconfig();
        $this->connection = $connection->connectToDatabase();
        $this->helper = new helper();
    }
    public function login($username,$password,$remember="0"){
        $username = mysqli_real_escape_string($this->connection,$username);
        $password = mysqli_real_escape_string($this->connection,$password);

        $result = $this->helper->check("student", "WHERE username='$username' && password='$password'");
        if ($result){

        }
    }
}