//Ajax Call for the sign up form
//once the form is submitted
$('#signupform').submit(function(event){
    //prevent default php processing
    event.preventDefault();

    //collect user inputs
    let datatoPost = $(this).serializeArray();

    console.log(datatoPost);

    //send them to signup.php using ajax
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatoPost,
        //AJAX call successful: show error or success message
        success: function(data){
            if(data){
                $("#signupmessage").html(data)
            }
        },
        //AJAX call fails: show Ajax call error
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>there was an error </div>")
        }
    });
})