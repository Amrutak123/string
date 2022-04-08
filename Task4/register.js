var button = document.getElementById("registrationBtn");

button.onclick=function (event) {
  event.preventDefault();
    var fname = document.getElementById("fullName").value; 
    var email = document.getElementById("Email").value;
    var pswd = document.getElementById("password").value;
    var cpswd = document.getElementById("confirmpswd").value;
   //var email_check= document.getElementById("email_check").value;
    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

    nameError.style.padding="10px";
    if(fname ==''  || !/^[a-z,',-]+(\s)[a-z,',-]+$/i.test(fname) )
    { 
      document.getElementById("nameError").innerHTML="Enter valid Name";
      return false;
    }
    //nameError.style.display = 'none';
    // else if(!regName.test(fname))
    // {
    //   document.getElementById("nameError").innerHTML="Enter valid  Name";
    //   return false;
    // }
    nameError.style.display = 'none';

    emailError.style.padding="10px";
    if(email=='' || !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
    {
      document.getElementById("emailError").innerHTML="Enter valid EmailID";
      return false;
    }
    emailError.style.display = 'none';

    pswdError.style.padding="10px";
    if(pswd=='' ||  !pswd.match(paswd))
    {
      document.getElementById("pswdError").innerHTML="Enter valid passowrd\n ";
      document.getElementById("pError").innerHTML="<strong> [ password should be in 7 to 15 characters which contain at least one numeric digit \nand a special character]</strong>";
      return false;
    } 
    pswdError.style.display = 'none';
    pError.style.display='none';
    
    cpError.style.padding="10px";
    if(cpswd=='' || cpswd !== pswd)
    {
      document.getElementById("cpError").innerHTML="password not matched. ";
      return false;
    }
    cpError.style.display = 'none';

    document.getElementById("agreeTerms").value;
    icheck.style.padding="5px";
   if(agreeTerms.checked==false)
   {
   //alert("plz check the checkbox field");
   document.getElementById("icheck").innerHTML="plz check the checkbox field";
   //icheck.style.display = 'inline-block';
   return false;
   }
   icheck.style.display = 'none';

$.ajax({
  type: "POST",
  url:"register.php",
  data:{
    fullName : fname,
    Email:email,
    password:pswd
    
  },
  success: function (data) {
    // var status = JSON.parse(data);
    // if(status.statusCode !==200)
    // {
    //   document.getElementById("emailError").innerHTML = "email already exsist*";
     
    // }
    // else
    //   {
        alert("Registration successfully\nclick on ok to login");
      // window.location = "login.php";

  },
  error: function (error) {
      console.log(error);
  }
});
}

$(document).ready(function() {

  $('.checking_email').keyup(function(e) {
    var email = $('.checking_email').val();

    $.ajax({
      type: "POST",
      url: "registration.php",
      data: {
        "submitButton": 1,
        "email": email
      },
      success: function(response) {

        $("#emailError").text(response);
      },



    });


  });


});
// function checkEmail(email){
// $(document).on('input','#email',function(e){
//   let email = $('#email').val();
//   let msg;
//   if(email.length==0){
//     msg="<span style='color:red'>Enter username</span>";
//   }
//   else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(email)){
//     msg="<span style='color:red'>Email is not Valid</span>";
//   }else{
//     checkEmail(email);
//   }
//   $('#emailStatus').html(msg);
// });

//   $.ajax({
//    method:"POST",
//    url: "register.php",
//    data:{email:email},
//    success: function(data){
//      $('#emailStatus').html(data);
//    },
//    error:function (error) {
//     console.log(error);
//     }
//  });
// }

