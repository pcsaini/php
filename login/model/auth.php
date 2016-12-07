<?php
/**
 * Created by PhpStorm.
 * User: pcsaini
 * Date: 8/12/16
 * Time: 1:49 AM
 */

class auth_model extends DBconfig{

    public function __construct()
    {
        $connection = new DBconfig();
        $this->connection = $connection->connectToDatabase();
        $this->helper = new helper();
    }
    public function login($username, $password){
        $username = mysqli_real_escape_string($this->connection,$username);
        $password = mysqli_real_escape_string($this->connection,$password);

        $result = $this->helper->check("users","WHERE username = '$username' AND password = '$password'");

        return $result;
    }
}