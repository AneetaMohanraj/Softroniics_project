<?php
include 'getCategory.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="customer_Dashboard.js"></script>
</head>
<body>
    <div name="dashboard">
        <h5>Current Trends</h5>   
    <span id="categorydiv">
    <div class="popularcategory"><img src="photos/appleicon.png" height="30px" width="30px"><br><font size="1">Popular</font></div>
    <?php while($row = $data->fetch_assoc()){ ?>
        <div class="categoryselect" id="<?php echo $row['pk_int_category_id']; ?>"><img src="photos/<?php echo $row['vchr_category_image']; ?>" height="30px" width="30px"><br><font size="1"><?php echo $row['vchr_category']; ?></font></div>

        <?php } ?>




      </span>

<!-- FOOD ITEMS LIST SECTION -->

      <span id="fooddiv">
        <div><img src="photos/appleicon.png" height="70px" width="70px" >
          <br><font size="2">Cheese Burger<br>Rs.35</font><br><br>
          <input id="fooddivButton" type="button" value="Order" style="background-color: #ec8b8b;padding: 10px;color: white;height: 30px;width: 90px;border-radius: 30px;">

        </div>
      </span></div>
</body>
</html>