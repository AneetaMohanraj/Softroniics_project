<?php
include 'database_connection.php';
$sql="Select * from tbl_product";
$data = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Data passing through PHP</title>
</head>
<body>
    <table>
        <tr>
            <th>product name</th>
            <th>stock</th>
        </tr>
<?php 
while($row = mysqli_fetch_assoc($data)){
?>        
        <tr>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><a href="delete.php?id=<?php echo $row['pk_productid']; ?>"><button>Delete</button></a></td>
            <td><a href="edit.php?editid=<?php echo $row['pk_productid']; ?>"><button>Edit</button></a></td>
        </tr>
        
<?php
}

?>        
    </table>
</body>
</html>