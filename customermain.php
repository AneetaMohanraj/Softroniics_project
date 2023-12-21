<!-- SHOWING CATEGORIES IN THE PAGE -->

<?php
include 'getCategory.php';
session_start();
?>

<!-- CUSTOMER HOME PAGE  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard</title>
  <link rel="icon" type="image/x-icon" href="photos/appleicon.png">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Agbalumo&family=Ephesis&family=Inconsolata&family=Playfair+Display&family=Roboto+Mono:wght@200&family=Source+Code+Pro:ital,wght@0,200;1,200&display=swap');

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="customermain.js"> </script>

  <!-- SENDING ID OF CATEGORY TO getFood.php TO FETCH FOOD LIST -->

  <script>
    $(function(){
      var original = $('#fooddiv').html();
      // console.log(original);

      $('.popularcategory').on('click',function(){
        $('#fooddiv').html(original)
      })

      $('.categoryselect').on('click',function(){
         let cid = $(this).attr('id');
         console.log(cid);

         $.ajax({
          url:'customer_ShowFood.php',
          type:'post',
          data:{
            'id':cid
          },
          dataType:'json',
          success:function(response){
            let htmlContent = '';  // Initialize an empty string to store HTML content foodItem.foodid class="fooddivButton"

// Loop through each food item in the response //  background-color: #ec8b8b;padding: 10px;color: white;height: 30px;width: 90px;border-radius: 30px;
            for (let i = 0; i < response.length; i++) {
                  let foodItem = response[i];

    // Create HTML content for each food item
                  htmlContent += '<div>';
                  htmlContent += '<img src="photos/' + foodItem.img + '" height="70px" width="70px">';
                  htmlContent += '<br><font size="2">' + foodItem.foodname + '<br>Rs.' + foodItem.price + '</font><br><br>';
                  htmlContent += '<a href="customer_OrderView.php?id='+foodItem.foodid+'"><input class="fooddivButton" type="button" value="Order" style="background-color: #ec8b8b;padding: 10px;color: white;height: 30px;width: 90px;border-radius: 30px;"></a>';
                  htmlContent += '</div>';
             }
             $('#fooddiv').html(htmlContent);
// Set the HTML content to the insideContainerTotal

          },
          error:function(xhr,status,error){
            alert("error : "+status+" "+error)
          }
         })
      })

      $('#fooddivButton').on('click',function(){
        let id = $(this).attr('id')
        console.log(id);
      })
    })
  </script>

  <link href="customermain.css" rel="stylesheet">
</head>
<body>

  <div id="dashboard">

<!-- SIDE NAVIGATION BAR SECTION -->

    <div id="sidebar">
      <div style="text-align: center;"><img src="photos/appleicon.png" height="60px" width="60px"></div><br><br>
      <div class="menu-item"><a href="customer_Dashboard.php" style="text-decoration: none;">Dashboard</a></div>
      <div class="menu-item"><a href="customer_ViewFeedbacks.html" style="text-decoration: none;">Reviews</a></div>
      
      <div class="menu-item" ><a href="customer_Settings.html" style="text-decoration: none;">Settings</a></div>
      <div class="menu-item" ><a href="logout.php" style="text-decoration: none;">Logout</a></div>
      

    </div>
    <div id="maincontainer">

      <h2>&nbsp;&nbsp;<button id="navhide" style="background-color: rgba(219, 218, 215, 0.164);border: rgba(219, 218, 215, 0.164);">
        <img src="photos/navigationicon.png" width="15px" height="10px"></button>&nbsp;&nbsp;&nbsp;&nbsp;<font size="3">Dashboard</font></h2>
      <p></p>

<!-- MAIN HEADER IMAGE SECTION -->


    <span>&nbsp;&nbsp;
      <div id="contentbox">
        <div style="text-align:left;padding-left: 30px;"><font size="7" style="font-family: Ephesis;color: rgb(248, 67, 103);">Welcome<br>Have a Happy Meal</font></div>
      </div>
      
    </span>

    <div id="changecontent" name="dashboard">
      <h5>Current Trends</h5>   
      
      
<!-- CATEGORY SECTION -->

      <span id="categorydiv">
      <div class="popularcategory"><img src="photos/appleicon.png" height="30px" width="30px"><br><font size="1">Popular</font></div>

        <?php while($row = $data->fetch_assoc()){ ?>
        <div class="categoryselect" id="<?php echo $row['pk_int_category_id']; ?>"><img src="photos/<?php echo $row['vchr_category_image']; ?>" height="30px" width="30px"><br><font size="1"><?php echo $row['vchr_category']; ?></font></div>

        <?php } ?>
<!-- 
        <div ><img src="photos/appleicon.png" height="30px" width="30px"><br><font size="1">Popular</font></div>
        <div ><img src="photos/drinks.png" height="30px" width="30px"><br><font size="1">Drinks</font></div>
        <div ><img src="photos/pizza.png" height="30px" width="30px"><br><font size="1">Pizza</font></div>
        <div ><img src="photos/burger.png" height="30px" width="30px"><br><font size="1">Burgers</font></div>
        <div ><img src="photos/fries.png" height="30px" width="30px"><br><font size="1">Fries</font></div>
        <div ><img src="photos/deserts.png" height="30px" width="30px"><br><font size="1">Deserts</font></div>
        <div ><img src="photos/cakes.png" height="30px" width="30px"><br><font size="1">Cakes</font></div>
        <div ><img src="photos/noodles.png" height="30px" width="30px"><br><font size="1">Noodles</font></div> -->




      </span>

<!-- FOOD ITEMS LIST SECTION -->

      <span id="fooddiv">
        <div id="popularfood"><img src="photos/pavbhaji.png" height="70px" width="70px" >
          <br><font size="2">Pav Bhaji<br>Rs.20</font><br><br>
          <a href="customer_OrderView.html"><input class="fooddivButton" type="button" value="Order" style="background-color: #ec8b8b;padding: 10px;color: white;height: 30px;width: 90px;border-radius: 30px;"></a>

        </div>
      </span>
    </div>
    </div>



<!-- SIDE CONTAINER ORDER HISTORY SECTION -->


<div id="popupOverlayOrder" class="overlay">
  <div id="popupContentOrder" class="popup"align="center" >
      <span id="closePopupButton" class="close">&times;</span>
      <!-- Content of your popup goes here -->
      <font size="5" style="font-family: Ephesis;">Order Updates</font>
      <p>Do you want to cancel this order?</p>
      <button type="submit" style="height: 40px;width: 150px;background-color: #ec8b8b;color: white;padding: 10px;border-radius: 30px;">Cancel</button>
  </div>
</div>

    <div id="sidecontainer">
      <div id="insideside" style="text-align: center;"><font size="6" style="font-family: Ephesis;">My Orders</font> <br><br>
        <div style="overflow: auto;">
        <table align="center" id="insideContainerTable">
          <tr data-href="editprofile.html">
            <td><img src="photos/pizza.png" height="20px" height="20px"></td>
            <td align="left">Pizza<br>x4</td>
            <td>300Rs/-</td>
          </tr>
          <tr>
            <td><img src="photos/burger.png" height="20px" height="20px"></td>
            <td align="left">burger<br>x3</td>
            <td>250Rs/-</td>
          </tr>
    
      </table>
    </div>

    <div id="insideContainerTotal"><font size="6px" style="font-family: Ephesis;color: rgb(238, 51, 82);"> total orders </font></div>
    
       
      
    </div>
    



  </div>

  

</body>
</html>
