
$('#passbtn').on("click", function(e)
{
    e.preventDefault();
  var email= $("#email").val();
  var regex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var validate=regex.test(email);
  if (email!="" && validate== true)
  {
    $.ajax({
        type: "POST",
        url:"./forgetpassword.php",
        data:
        {
          email:email
        },
        success:function(result)
        {
                document.getElementById("passwordResult").innerHTML =result;
                
        },
        error: function (error) 
        {
            console.log(error);
        }
            });
  }
} )