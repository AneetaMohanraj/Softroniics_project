<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database_connection.php';

class OrderView{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function viewOrders(){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_register JOIN tbl_order ON tbl_register.pk_int_id=tbl_order.fk_int_user_id");
        $st->execute();
        return $st->get_result();
    }

    public function getOrders($orderid){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_order_details JOIN tbl_food ON tbl_order_details.fk_int_food_id=tbl_food.pk_int_food_id WHERE tbl_order_details.fk_int_order_id= ?");
        $st->bind_param("i",$orderid);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$order = new OrderView($db);

$data = $order->viewOrders();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>.orders{text-decoration: none;color: black;}</style>

    
    <script>
    </script>

</head>
<body>
    <h5>Orders </h5>
    <table id="dashboardTable">
    <tr>
        <th>User Name</th>
        <th>Food</th>
        <th>Quantity</th>
        <th>Total amount</th>
        <th>Status</th>
    </tr>
    
    <?php  while($row = $data->fetch_assoc()){?>
        <tr>
        <td><?php echo $row['vchr_name']; ?></td>
        <?php $getorder = $order->getOrders($row['pk_int_order_id']);
        while($rowss = $getorder->fetch_assoc()){?>
             <td><?php echo $rowss['vchr_food_name']; ?></td>
             <td><?php echo $rowss['int_quantity']; ?></td>
             <td><?php echo $rowss['int_price']; ?></td>
       <? } ?>
      <td><?php echo $row['vchr_status']; ?></td>
      </tr>
   <?php }?>
  
   



</table>
</html>