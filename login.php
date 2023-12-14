<?php
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
        if($result->num_rows === 0){
            echo json_encode(array("notexists" => true));
        }
        else{
            $row = $result->fetch_assoc();
            if($row['vchr_type'] === "admin"){
                echo json_encode(array('usertype' => 'admin'));
            }
            elseif($row['vchr_type'] === "customer"){
                echo json_encode(array('usertype' => 'customer'));
            }
        }


    }
}

$db = new Database();
$login = new Login($db);
  
$login->login($username,$password);

?>
