<?php
include 'database_connection.php';

$reply = $_POST['reply'];
$id = $_POST['id'];

class SendReply{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function sendReply($reply,$id){
        $st = $this->db->getConnection()->prepare("UPDATE tbl_feedback SET vchr_reply = ? WHERE pk_int_feedback_id = ?");
        $st->bind_param("si",$reply,$id);
        $st->execute();
    }
}

$db = new Database();
$send = new SendReply($db);
$send->sendReply($reply,$id);
?>