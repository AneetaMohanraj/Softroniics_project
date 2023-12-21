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

      if(val === 'changepassword.html'){
        window.location.href='changepassword.html';
      }

    })


  })