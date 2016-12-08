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

        $user_id = $this->helper->db_select("user_id","users","WHERE username = '$username' OR email = '$username'");
        $session_id = $this->helper->mysqli_result($user_id);
        $result = $this->helper->check("users","WHERE username = '$username' OR email = '$username' AND password = '$password'");
        if ($result){
            $_SESSION['session_id'] = $session_id;
        }
        return $result;
    }
    public function checkSession($session_id) {
        $result = $this->helper->check("users", "WHERE user_id='$session_id' ");
        return $result;
    }
    public function userDetail(){
        $session_id = $_SESSION['session_id'];
        $resultRaw = $this->helper->db_select("*", "users", "WHERE user_id='$session_id'");
        $result = $resultRaw->fetch_assoc();
        return $result;
    }
}