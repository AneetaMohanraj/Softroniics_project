<?php
include 'database_connection.php';

class Category{
  private $db;

  public function __construct(Database $db){
      $this->db = $db;
  }

  public function categoryShow(){
    $stmt = $this->db->getConnection()->prepare("SELECT * FROM tbl_category");
    $stmt->execute();
    return $stmt->get_result();
  }
}
$db = new Database();
$category = new Category($db);
$data = $category->categoryShow();
?>