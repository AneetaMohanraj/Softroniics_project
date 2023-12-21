<?php
include 'database_connection.php';

class ViewFood{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewFood(){
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM tbl_food JOIN tbl_category ON `fk_int_category_id` = `pk_int_category_id`");
        $stmt->execute();
        return $stmt->get_result();
    }
}

$db = new Database();
$viewfood = new ViewFood($db);
$data = $viewfood->viewFood();
$arr = array();

while($row = $data->fetch_assoc()){
    $x = array('foodid'=>$row['pk_int_food_id'],'category'=>$row['vchr_category'],'foodimage'=>$row['vchr_image'],'foodname'=>$row['vchr_food_name'],'price'=>$row['int_price']);
    array_push($arr,$x);
}
 echo json_encode($arr);
?>