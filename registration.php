<?php
include 'database_connection.php';
if(isset($_POST['loginbutton'])){
    $name = $_POST['username'];
    $email = $_POST['password'];
    $type = "customer";
    mysqli_query($con,"insert into login(username,password,type) values('$name','$email','$type')");
}
?>