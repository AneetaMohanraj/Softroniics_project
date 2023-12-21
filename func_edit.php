<?php
include 'database_connection.php';

$id=$_GET['editid'];

$data=mysqli_query($con,"select * from tbl_product where pk_productid='$id'");

$row=mysqli_fetch_assoc($data);

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
    <input type="text" name="name" placeholder="Change the name of product" value="<?php echo $row['product_name'];?>"><br>
    <input type="text" name="stock" placeholder="Change the stock value" value="<?php echo $row['stock'];?>"><br>
    <button name="btn">Edit</button>
    </form>

</body>
</html>

<?php
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $stock = $_POST['stock'];
    mysqli_query($con,"update tbl_product set product_name='$name',stock='$stock' where pk_productid='$id'");

    header("location:fetchDbData.php");
}

?>