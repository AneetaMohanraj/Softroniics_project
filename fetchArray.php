<?php
include 'dbconnection.php';

class FetchData{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }
    public function fetchingData(){
        $fetch = $this->db->getConnection()->prepare("SELECT name,email FROM test");
        $fetch->execute();
        return $fetch->get_result();
    }
}


$db = new Database();
$datafetch = new FetchData($db);

$arr=[];

$data=$datafetch->fetchingData();
while($row = $data->fetch_assoc()){
    array_push($arr,$row);
}

print_r($arr);
?>