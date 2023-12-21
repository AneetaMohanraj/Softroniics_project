<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database_connection.php';

// $id = $_POST['foodid'];
$id = 2;
// $qty = $_POST['quantity'];
$qty = 3;
session_start();
$userid = $_SESSION['user'];
$currentDate = date("Y-m-d");
// echo $currentDate;

class PlaceOrder{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function checkUser($userid,$currentDate){
        $st = $this->db->getConnection()->prepare("SELECT * FROM `tbl_order` WHERE `fk_int_user_id`= ? AND `date_order_date`= ?; ");
        $st->bind_param("is",$userid,$currentDate);
        $st->execute();
        $data = $st->get_result();
        // print_r($data);
        // print_r($data->num_rows);
        if($data->num_rows > 0){
            $row = $data->fetch_assoc();
            return $row['pk_int_order_id'];
        }
        else if($data->num_rows === 0){
            $status = 'pending';
            $in = $this->db->getConnection()->prepare("INSERT INTO tbl_order(fk_int_user_id,date_order_date,vchr_status) VALUES(?,?,?)");
            $in->bind_param("iss",$userid,$currentDate,$status);
            $in->execute();
            $insertid = $this->db->getConnection()->insert_id;
            return $insertid;
        }

    }

    public function placeOrder($order_id,$id,$qty){
        $st = $this->db->getConnection()->prepare("INSERT INTO `tbl_order_details`(`fk_int_order_id`, `fk_int_food_id`, `int_quantity`) VALUES (?,?,?)");
        $st->bind_param("iii",$order_id,$id,$qty);
        $st->execute();
    }
}

$db = new Database();
$order = new PlaceOrder($db);

$order_id= $order->checkUser($userid,$currentDate);
echo $order_id;

$order->placeOrder($order_id,$id,$qty);
?>