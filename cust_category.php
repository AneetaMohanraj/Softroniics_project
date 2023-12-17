<?php
include 'database_connection.php';

class Category{
    private $db;

    public function __construct(Database $db){
          $this->db = $db;
    }

    public function category(){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_category");
        $st->execute();
        return $st->get_result();
    }
}

$db = new Database();
$category = new Category($db);

$arr=array();
$data = $category->category();
while($row = $data->fetch_assoc()){
   $x = ["cid"=>$row['pk_int_category_id'],"category"=>$row['vchr_category']];
   array_push($arr,$x);
} 

echo json_encode($arr);
?>