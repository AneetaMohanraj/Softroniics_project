<?php
include 'database_connection.php';

class OrderView{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewOrders(){
        $st = $this->db->getConnection()->prepare("SELECT COUNT(tbl_order_details.pk_int_details_id) as details_count,tbl_order.pk_int_order_id,tbl_register.vchr_name,tbl_food.vchr_food_name,tbl_food.int_price,tbl_order.vchr_status,tbl_order_details.int_quantity
        FROM tbl_order JOIN tbl_order_details ON tbl_order.pk_int_order_id = tbl_order_details.fk_int_order_id JOIN tbl_register ON tbl_order.fk_int_user_id = tbl_register.pk_int_id JOIN tbl_food ON tbl_order_details.fk_int_food_id = tbl_food.pk_int_food_id GROUP BY tbl_order_details.fk_int_order_id ORDER BY tbl_order.date_order_date,tbl_register.vchr_name");
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$order = new OrderView($db);

$data = $order->viewOrders();
$arr = array();

while($row = $data->fetch_assoc()){
    $x = array('username'=>$row['vchr_name'],'Food'=>$row['vchr_food_name'],'Quantity'=>$row['int_quantity'],'TotalAmount'=>$row['int_price'],'Status'=>$row['vchr_status'],'orderid'=>$row['pk_int_order_id'],'count'=>$row['details_count']);
    array_push($arr,$x);
}
echo json_encode($arr);
?>