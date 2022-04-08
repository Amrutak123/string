// function validation() { 
//     var fname = document.getElementById("fullname").value; 
//     var email = document.getElementById("Email").value;
//     var pswd = document.getElementById("password").value;
//     var cpswd = document.getElementById("confirmpswd").value;
//     nameError.style.padding="10px";
//     if(fname!=='')
//     {
//     nameError.style.display = 'none';
//     }
//     else{
//       document.getElementById("nameError").innerHTML="Enter Your full Name";
//       return false;
//     }

//     emailError.style.padding="10px";
//     if(email=='')
//     {
//       document.getElementById("emailError").innerHTML="Enter Your EmailID";
//       return false;
//     } else{
//       emailError.style.display = 'none';
//     }
    
//     pswdError.style.padding="10px";
//     if(pswd=='')
//     {
//       document.getElementById("pswdError").innerHTML="Enter Your passowrd";
//       return false;
//     } else{
//       pswdError.style.display = 'none';
//     }
    
//     cpError.style.padding="10px";
//     if(cpswd=='' || cpswd !== pswd)
//     {
//       document.getElementById("cpError").innerHTML="password not matched. ";
//       return false;
//     } else{
//       cpError.style.display = 'none';
//     }
//     var confirm=document.getElementById("agreeTerms").value;
//     icheck.style.padding="5px";
//    if(agreeTerms.checked==false)
//    {
//    //alert("plz check the checkbox field");
//    document.getElementById("icheck").innerHTML="plz check the checkbox field";
//    //icheck.style.display = 'inline-block';
//    return false;
//    }
//    else
//    {
//     icheck.style.display = 'none';
//    }
// }