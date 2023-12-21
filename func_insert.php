<?php
include 'database_connection.php';
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    mysqli_query($con,"insert into test(name,email) values('$name','$email')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Data passing through PHP</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Enter the name" name="name">
        <input type="text" placeholder="Enter the email" name="email">
        <button name="btn">Submit</button>
    </form>
</body>
</html>