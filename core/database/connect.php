<?php


class DBconfig{
    var $connection;

    public function __construct()
    {
        $this->hostname = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "library";
    }
    function connectToDatabase(){
        $connection = new mysqli($this->hostname,$this->username,$this->password,$this->database);
        if($connection->connect_errno > 0)
        {
            die ("<div style='background: red; color: yellow; padding: 20px;'>Cannot connect to the database, please check database settings.</div>");
        }

        else
        {
            $this->connection = $connection;
        }

        return $this->connection;
    }
}
