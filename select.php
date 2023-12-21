<?php
include 'dbconnection.php';

class FetchData{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }
    public function fetchingData(){
        $fetch = $this->db->getConnection()->prepare("SELECT * FROM test");
        $fetch->execute();
        return $fetch->get_result();
    }
}


$db = new Database();
$datafetch = new FetchData($db);

$data=$datafetch->fetchingData();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php while($row = $data->fetch_assoc()){  ?>
        <tr>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><a href="edit.php?id=<?php echo $row['id'];?>"><button>update</button></a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>"><button>delete</button></a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>