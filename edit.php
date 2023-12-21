<?php
include 'dbconnection.php';

$id = $_GET['id'];


class updateTest {
    private $db;
    private $id; 

    public function __construct(Database $db, $id) { 
        $this->db = $db;
        $this->id = $id; 
    }

    public function fetchData() {
        $fetch = $this->db->getConnection()->prepare("SELECT * FROM test where id = ?");
        $fetch->bind_param("i", $this->id); 
        $fetch->execute();
        return $fetch->get_result();
    }

    public function updateData($name, $email) {
        $data = $this->db->getConnection()->prepare("UPDATE test SET name = ?, email = ? WHERE id = ?");
        $data->bind_param("ssi", $name, $email, $this->id); 
        $data->execute();
        header("location:select.php");
    }
}
 
$db = new Database();
$update = new updateTest($db, $id);

$data = $update->fetchData();
$row = $data->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo $row['name'];?>">
        <input type="text" name="email" value="<?php echo $row['email'];?>">
        <button name="submit">update</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $update->updateData($name, $email); 
}
?>
