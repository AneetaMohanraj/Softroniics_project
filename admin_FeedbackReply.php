<?php
include 'database_connection.php';

$feedid = $_GET['id'];
// echo $feedid;

class Reply{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewSelected($id){
        $st = $this->db->getConnection()->prepare("SELECT vchr_feedback FROM tbl_feedback where pk_int_feedback_id = ?");
        $st->bind_param("i",$id);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$reply = new Reply($db);

$data = $reply->viewSelected($feedid);
$row = $data->fetch_assoc();
$arr = array('feedback'=>$row['vchr_feedback']);
echo json_encode($arr);
header('location:admin_FeedbackReply.html');
?>