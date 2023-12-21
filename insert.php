<?php
include 'dbconnection.php';

class Registration{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function registerUser($name,$email){
        $stmt = $this->db->getConnection()->prepare("INSERT INTO test(name,email) VALUES(?,?)");

        $stmt->bind_param("ss",$name,$email);

        $stmt->execute();

    }
}
//usage

$db = new Database();
$register = new Registration($db);

if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $register->registerUser($name,$email);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#sub').on('click',function(e){
                e.preventDefault();
            })
        })
    </script>
</head>
<body>
    <form action="" method="post" id="forms">
        <input type="text" name="name" id="name" placeholder="enter name">
        <input type="text" name="email" id="email" placeholder="enter email">
        <button type="submit" name="sub" id="sub">click here</button>
    </form>
</body>
</html>