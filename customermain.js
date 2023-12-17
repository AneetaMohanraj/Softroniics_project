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



  })