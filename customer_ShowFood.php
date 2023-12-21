<?php
include 'database_connection.php';

$id = $_POST['id'];

class ShowFood{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function showFood($id){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_food WHERE fk_int_category_id = ?");
        $st->bind_param("i",$id);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$show = new ShowFood($db);

$arr = array();
$data = $show->showFood($id);

while($row = $data->fetch_assoc()){
    $x = array('foodname'=>$row['vchr_food_name'],'price'=>$row['int_price'],'img'=>$row['vchr_image'],'foodid'=>$row['pk_int_food_id']);
    array_push($arr,$x);
}
echo json_encode($arr);
?>