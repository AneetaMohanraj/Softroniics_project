<?php

include 'database_connection.php';

$name = $_POST['name'];
$image = $_POST['image'];
// echo "$name --  $image";

class InsertCategory{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function insertCategory($name,$image){
        echo "hello";
        $st = $this->db->getConnection()->prepare("INSERT INTO tbl_category(vchr_category,vchr_category_image) VALUES(?,?)");
        $st->bind_param("ss",$name,$image);
        $st->execute();
    }
}

$db = new Database();
$insert = new InsertCategory($db);
$insert->insertCategory($name,$image);
?>