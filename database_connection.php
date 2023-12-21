<?php
class Database{
    private $con;

    public function __construct(){
        $this->con = new mysqli("localhost","root","","project");

        if($this->con->connect_error){
            die("connection failed : ".$this->con->connect_error);
        }


    }
    public function getConnection(){
        return $this->con;
    }
}

