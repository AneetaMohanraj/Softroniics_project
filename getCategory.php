<?php
include 'dbconnection.php';

class Category{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function categoryFetch(){
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM category");
        $stmt->execute();
        return $stmt->get_result();
    }
}


$db = new Database();
$cat = new Category($db);
$data = $cat->categoryFetch();

$arr = array();
while($row = $data->fetch_assoc()){
    
}



?>