<?php
include 'database_connection.php';

class ViewCategory{
  private $db;

  public function __construct(Database $db){
    $this->db = $db;
  }
  public function viewCategory(){
    $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_category");
    $st->execute();
    return $st->get_result();
  }

}

$db = new Database();
$view = new ViewCategory($db);

$arr = array();
$data = $view->viewCategory();

while($row = $data->fetch_assoc()){
    $x = array('categoryimg'=>$row['vchr_category_image'],'category'=>$row['vchr_category'],'categoryid'=>$row['pk_int_category_id']);
    array_push($arr,$x);
}
echo  json_encode($arr);
?>