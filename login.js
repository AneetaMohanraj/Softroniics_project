$(function(){
 
    $("#forms").validate({
        rules:{
            username:{
                required:true
            },
            password:{
                required:true
            }

        },
        messages:{
            username:{
                required:'enter a username' 
            },
            password:{
                required:'enter password'
            }

        }
        // submitHandler: function(form) {
        //     // If the form is valid, you can perform actions here, like AJAX submission
        //     alert('Login Successful')
        //   }
    });
})
