<?php
include 'dbconnection.php';
$id = $_POST['id'];
// echo "received $id <br>";

class Food{
    private $db;
    private $id;

    public function __construct(Database $db,$id){
        $this->db = $db;
        $this->id = $id;
    }
    public function getFood(){
        $st = $this->db->getConnection()->prepare("SELECT * FROM food WHERE cid = ?");
        $st->bind_param("i",$this->id);
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$food = new Food($db,$id);

$data = $food->getFood();

$arr = array();

while($row = $data->fetch_assoc()){
    $arr[] = $row['food'];
}
header('Content-Type: application/json');
echo json_encode($arr);
?>