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
          let htmlContent = '';  // Initialize an empty string to store HTML content

// Loop through each food item in the response
          for (let i = 0; i < response.length; i++) {
                let foodItem = response[i];

  // Create HTML content for each food item
                htmlContent += '<div>';
                htmlContent += '<img src="photos/' + foodItem.img + '" height="70px" width="70px">';
                htmlContent += '<br><font size="2">' + foodItem.foodname + '<br>Rs.' + foodItem.price + '</font><br><br>';
                htmlContent += '<input class="fooddivButton" type="button" value="Order" style="background-color: #ec8b8b;padding: 10px;color: white;height: 30px;width: 90px;border-radius: 30px;">';
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

  })








  // <div class="categoryselect" id="<?php echo $row['pk_int_category_id']; ?>"><img src="photos/<?php echo $row['vchr_category_image']; ?>" height="30px" width="30px"><br><font size="1"><?php echo $row['vchr_category']; ?></font></div>