<?php
<<<<<<< HEAD
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'database_connection.php';


=======
include 'database_connection.php';

>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
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
<<<<<<< HEAD
        $row = $result->fetch_assoc();
=======
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
        if($result->num_rows === 0){
            echo json_encode(array("notexists" => true));
        }
        else{
<<<<<<< HEAD
=======
            $row = $result->fetch_assoc();
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
            if($row['vchr_type'] === "admin"){
                echo json_encode(array('usertype' => 'admin'));
            }
            elseif($row['vchr_type'] === "customer"){
                echo json_encode(array('usertype' => 'customer'));
            }
<<<<<<< HEAD
            
            $userid = $row['pk_int_id'];
            session_start();
            $_SESSION['user'] = $userid;
        }
=======
        }


>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
    }
}

$db = new Database();
$login = new Login($db);
  
$login->login($username,$password);

<<<<<<< HEAD

=======
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
?>
