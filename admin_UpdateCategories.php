<?php
include 'database_connection.php';

$id = $_POST['id'];
// echo $id;
$category = $_POST['name'];
$img = $_POST['image'];

class Update{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function updateCategory($category,$img,$id){
        // echo $category.$id.$img;
        $st = $this->db->getConnection()->prepare("UPDATE tbl_category SET vchr_category = ? ,vchr_category_image = ? WHERE pk_int_category_id = ?");
        $st->bind_param("ssi",$category,$img,$id);
        if ($st->execute()) {
            echo "Category updated";
        } else {
            echo "Error updating category: " . $st->error;
        }
    }
}

$db = new Database();
$update = new Update($db);
$update->updateCategory($category,$img,$id);

?>