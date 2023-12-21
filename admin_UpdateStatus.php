<?php
include 'database_connection.php';

$status = $_POST['status'];
$id = $_POST['id'];
echo "$status - $id";

class UpdateStatus{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function statusChange($status,$id){
        $st = $this->db->getConnection()->prepare("UPDATE tbl_order SET vchr_status = ? WHERE pk_int_order_id = ?");
        $st->bind_param("si",$status,$id);
        $st->execute();
    }
}

$db = new Database();
$change = new UpdateStatus($db);
$change->statusChange($status,$id);
?>