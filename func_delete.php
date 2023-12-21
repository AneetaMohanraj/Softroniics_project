<?php
include 'database_connection.php';
$id=$_GET['id'];

mysqli_query($con,"delete from tbl_product where pk_productid='$id'");

header("location:fetchDbData.php");
?>