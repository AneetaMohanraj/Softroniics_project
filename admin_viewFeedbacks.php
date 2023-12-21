<?php
include 'database_connection.php';

class Feedback{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function feedback(){
        $st = $this->db->getConnection()->prepare("SELECT tbl_feedback.*,tbl_register.vchr_name FROM tbl_feedback JOIN tbl_register on fk_int_user_id = pk_int_id WHERE vchr_type = 'customer'");
        $st->execute();
        return $st->get_result();
    }

}

$db = new Database();
$feed = new Feedback($db);

$arr = array();
$data = $feed->feedback();

while($row = $data->fetch_assoc()){
    $x = array('feedid'=>$row['pk_int_feedback_id'],'username'=>$row['vchr_name'],'date'=>$row['date_feedback_date'],'feedback'=>$row['vchr_feedback'],'reply'=>$row['vchr_reply']);
    array_push($arr,$x);
}
echo json_encode($arr);
?>