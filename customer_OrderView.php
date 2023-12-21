<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database_connection.php';

$id = 2;
// $id = $_GET['id'];

class ViewOrder{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewOrders($id){
        $st = $this->db->getConnection()->prepare("SELECT * FROM `tbl_food` WHERE `pk_int_food_id`= ?");
        $st->bind_param("i",$id);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$orders = new ViewOrder($db);

$data = $orders->viewOrders($id);
$row = $data->fetch_assoc();
$arr = array('foodid'=>$row['pk_int_food_id'],'foodname'=>$row['vchr_food_name'],'foodprice'=>$row['int_price'],'foodimg'=>$row['vchr_image']);

echo json_encode($arr);
?>