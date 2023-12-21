<?php
include 'database_connection.php';

$id = $_POST['id'];
$food = $_POST['food'];
$price = $_POST['price'];
$image = $_POST['image'];

class GetFood{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getFood($id,$food,$price,$image){
        
        $stmt = $this->db->getConnection()->prepare("INSERT INTO tbl_food(fk_int_category_id,vchr_food_name,int_price,vchr_image) VALUES(?,?,?,?)");

        if(!$stmt){ 
            echo "error in prepare";
        }

        $stmt->bind_param("isis",$id,$food,$price,$image);
        if(!$stmt){
            echo "error in bind";
        }
        $stmt->execute();
        if(!$stmt){
            echo "error in execute";
        }

       
    }
}

$db = new Database();
$foods = new GetFood($db);

$foods->getFood($id,$food,$price,$image);
?>