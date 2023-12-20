<?php
include 'database_connection.php';

$id = $_GET['id'];

class Delete{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function deleteCategory($id){
        $st = $this->db->getConnection()->prepare("DELETE FROM tbl_category WHERE pk_int_category_id= ?");
        $st->bind_param("i",$id);
        $st->execute();
    }
}

$db = new Database();
$delete = new Delete($db);

$delete->deleteCategory($id);

header('location:adminmain.html');
?>