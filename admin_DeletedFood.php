<?php
include 'database_connection.php';

$id = $_GET['id'];

class Delete{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function deleteFood($id){
        $st = $this->db->getConnection()->prepare("DELETE FROM tbl_food WHERE pk_int_food_id = ?");
        $st->bind_param("i",$id);
        $st->execute();
        header('location:adminmain.html');
    }
}

$db = new Database();
$delete = new Delete($db);
$delete->deleteFood($id);
?>