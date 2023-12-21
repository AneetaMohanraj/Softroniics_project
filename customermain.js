$(function(){
    $('#navhide').on('click',function(){
      $('#sidebar').toggle();
    })

    $('.menu-item').on('click',function(){
      let val= $(this).find('a').attr('href');
      $('#changecontent').load(val)
      if(val === 'dashboard')
      {
        load().empty();
      }
      if(val === 'login.html'){
        window.location.href='login.html';
      }

    })




      $('#fooddivButton').click(function () {
          $('#popupOverlay').fadeIn();
      });
  
      $('#closePopupButton, #popupOverlay').click(function () {
          $('#popupOverlay').fadeOut();
      });
  
      // Prevent clicks inside the popup from closing it
      $('#popupContent').click(function (event) {
          event.stopPropagation();
      });
  

     
      function scrollLeft() {
          var currentScrollLeft = $('#categorydiv').scrollLeft();
          $('#categorydiv').scrollLeft(currentScrollLeft - 50);
      }
    $('#closePopupButton').click(scrollLeft);
      // Load content from source.html into #targetElement



  // $('#insideContainerTable').on('click','tr',function(){
  //   let url=$(this).attr('data-href');
    
  // })

// ----------------------------------------------------------------------------------------Order pop up-----------------------------------------------------

  $('#insideContainerTable tr').click(function () {
    $('#popupOverlayOrder').fadeIn();
});

$('#closePopupButton, #popupOverlayOrder').click(function () {
    $('#popupOverlayOrder').fadeOut();
});

// Prevent clicks inside the popup from closing it
$('#popupContentOrder').click(function (event) {
    event.stopPropagation();
});



function scrollLeft() {
    var currentScrollLeft = $('#categorydiv').scrollLeft();
    $('#categorydiv').scrollLeft(currentScrollLeft - 50);
}
$('#closePopupButton').click(scrollLeft);
// Load content from source.html into #targetElement






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
})

