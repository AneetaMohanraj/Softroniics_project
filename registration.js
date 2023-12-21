$(function(){
    $.validator.addMethod("customPassword", function(value, element) {
        console.log(value)
        return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(value);
      }, "Password must contain at least one lowercase letter, one uppercase letter, one special character, and have a minimum length of 8 characters");
  
    $("#forms").validate({
        rules:{
            name:{
                required:true
            },
            username:{
                required:true,
                minlength:8,
            },
            password:{
                required:true,
                customPassword:true
            },
            confirm_password:{
                required:true,
                equalTo:'#password'
            },
            email:{
                required:true,
                email:true


            },

        },
        messages:{
            name:{
                required:'enter a name'
            },
            username:{
                required:'enter a username',
                minlength:'enter more than two values'
            },
            password:{
                required:'enter password'

            },
            confirm_password:{
                required:'enter password',
                equalTo:'please enter the same password'
            },
            email:{
                required:'enter a email',
                email:'enter a valid email'
            },


        }
        // submitHandler: function(form) {
        //     // If the form is valid, you can perform actions here, like AJAX submission
        //     alert('form submitted')
        //   }
    });
<<<<<<< HEAD
})
=======
})
>>>>>>> 8768c7b541a7701ee2ed764a03f65f4e7e8b6676
