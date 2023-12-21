<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'database_connection.php';




class Feedbacks{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewFeedback(){
        $st = $this->db->getConnection()->prepare("SELECT tbl_register.vchr_name,tbl_feedback.vchr_feedback,tbl_feedback.vchr_reply,tbl_feedback.date_feedback_date FROM tbl_feedback JOIN tbl_register ON tbl_feedback.fk_int_user_id=tbl_register.pk_int_id");
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$feed = new Feedbacks($db);

$arr = array();
$data = $feed->viewFeedback();
while($row = $data->fetch_assoc()){
    $x = array('user'=>$row['vchr_name'],'feedback'=>$row['vchr_feedback'],'reply'=>$row['vchr_reply'],'date'=>$row['date_feedback_date']);
    array_push($arr,$x);
}
echo json_encode($arr);

?>
