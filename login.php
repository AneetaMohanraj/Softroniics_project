<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database_connection.php';


$username = $_POST['username'];
$password = $_POST['password'];

class Login{
    private $db;

    public function __construct(Database $db){
        $this->db  = $db;
    }

    public function login($username,$password){
        $st = $this->db->getConnection()->prepare("SELECT * FROM tbl_register WHERE vchr_user_name = ? AND vchr_password = ?");
        $st->bind_param("ss",$username,$password);
        $st->execute();
        $result = $st->get_result();
        $row = $result->fetch_assoc();
        if($result->num_rows === 0){
            echo json_encode(array("notexists" => true));
        }
        else{
            if($row['vchr_type'] === "admin"){
                echo json_encode(array('usertype' => 'admin'));
            }
            elseif($row['vchr_type'] === "customer"){
                echo json_encode(array('usertype' => 'customer'));
            }
            
            $userid = $row['pk_int_id'];
            session_start();
            $_SESSION['user'] = $userid;
        }
    }
}

$db = new Database();
$login = new Login($db);
  
$login->login($username,$password);


?>
