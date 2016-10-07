<?php
/**
 * Created by PhpStorm.
 * User: pcsaini779
 * Date: 07-10-2016
 * Time: 11:28 AM
 */

class helper extends DBconfig{
    public function __construct()
    {
        $connection = new DBconfig();
        $this->connection = $connection->connectToDatabase();
    }
    public function db_select($select, $tbname, $filter="") {
        $query = "SELECT $select FROM $tbname $filter";
        $result = $this->connection->query($query);
        return $result;
    }
    public function check($tbname,$where){
        $query = "SELECT * FROM $tbname $where";
        $query_result = mysql_query($this->connection->$query);
        if (mysqli_num_rows($query_result)>0){
            return true;
        }
        else{
            return false;
        }
    }
}