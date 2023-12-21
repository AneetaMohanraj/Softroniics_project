<?php
include 'dbconnection.php';

$id = $_GET['id'];


class DeleteData{
    private $db;
    private $id;

    public function __construct(Database $db,$id){
        $this->db = $db;
        $this->id = $id;
    }

    public function deleteRow(){
        $st = $this->db->getConnection()->prepare("DELETE FROM test where id = ?");
        $st->bind_param("i",$this->id);
        $st->execute();
        if($st->error){
            die("error : ".$st->error);
        }
        else{
            header("location:select.php");
        }
    }
}

$db = new Database();
$delete = new DeleteData($db,$id);
$delete->deleteRow();
?>
