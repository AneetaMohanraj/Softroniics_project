<?php
include 'database_connection.php';
<<<<<<< HEAD

$user = $_POST['username'];

class Registration{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function checkExists($username){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_register WHERE vchr_user_name = ?");
        $st->bind_param("s", $username);
        $st->execute();
        $result = $st->get_result();
        
        if ($result->num_rows > 0) {
            echo json_encode(array("exists" => true));
        } 
        // else if($result->num_rows == 0){
        //     echo json_encode(array("valid" => true));
        // }
    }

    public function registration($name,$email,$username,$password){
        $type = "customer";
        $st = $this->db->getConnection()->prepare("INSERT INTO tbl_register(vchr_user_name,vchr_password,vchr_name,vchr_email,vchr_type) VALUES(?,?,?,?,?)");
        $st->bind_param("sssss",$username,$password,$name,$email,$type);
        $st->execute();
        header("location:customermain.php");
    }
}


$db = new Database();
$register = new Registration($db);

$register->checkExists($user);

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $register->registration($name,$email,$username,$password);
}
?>
=======
if(isset($_POST['loginbutton'])){
    $name = $_POST['username'];
    $email = $_POST['password'];
    $type = "customer";
    mysqli_query($con,"insert into login(username,password,type) values('$name','$email','$type')");
}
?>
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
