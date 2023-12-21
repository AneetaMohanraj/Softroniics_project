<?php
include 'database_connection.php';

$feed = $_POST['feedback'];
$date = date("Y-m-d");
// echo $feed;

session_start();
$userid = $_SESSION['user'];
// echo $userid;

class SendFeed{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function sendFeed($userid,$feed,$date){
        $reply='-';
        $st = $this->db->getConnection()->prepare("INSERT INTO `tbl_feedback`( `fk_int_user_id`, `vchr_feedback`, `vchr_reply`, `date_feedback_date`) VALUES (?,?,?,?)");
        $st->bind_param("isss",$userid,$feed,$reply,$date);
        $st->execute();
    }

}

$db = new Database();
$send = new SendFeed($db);
$send->sendFeed($userid,$feed,$date);

?>