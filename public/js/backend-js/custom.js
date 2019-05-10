$(document).ready(function(){

        $("#password_validate").validate({
            rules:{
                current_pwd:{
                    required: true,
                    minlength:6,
                    maxlength:20
                },
                new_pwd:{
                    required:true,
                    minlength:6,
                    maxlength:20
                },
                confirm_pwd:{
                    required: true,
                    minlength: 6,
                    maxlength:20,
                    equalTo:"#new_pwd"
                }
            }
        });     
});



