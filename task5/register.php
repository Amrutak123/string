<?php 
//session_start();
include_once("server.php");

$id='';
$fullName='';
$email='';
$pswd='';
$cpassword='';
$msg='';
$emailErr='';
$regex='';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $id=$_POST['id'];
        $fullName= $_POST['fullName'];
        $email=$_POST['Email'];
        $pswd=$_POST['password'];
        $cpassword=$_POST['confirmpswd'];
        $submitbtn=$_POST["submitButton"];
        $regex = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
        if(!preg_match("/^([a-zA-Z' ]+)$/",$fullName)){
        //     alert("Valid name given");
        // }else{
            $msg="Invalid name given.";
        }
        // elseif(!preg_match($regex,$email)) {
        //     $emailErr = "Invalid email format";
        //   }
        
        else{
        $sql ="INSERT INTO user_details (fullName,Email,password)
        VALUES ('$fullName','$email','$pswd')";
        $result=mysqli_query($connection, $sql);
        // if ($result) 
        // {
        //   echo "New record created successfully";
        // } else 
        // {
        // echo"Error: " . $sql . "<br>" .mysqli_error($connection);
        // }
        
        header('location:login.php');
        }
        
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<script>    
        function validation() { 
          var fname = document.getElementById("fullname").value; 
          var email = document.getElementById("Email").value;
          var pswd = document.getElementById("password").value;
          var cpswd = document.getElementById("confirmpswd").value;
          nameError.style.padding="10px";
          if(fname!=='')
          {
          nameError.style.display = 'none';
          }
          else{
            document.getElementById("nameError").innerHTML="Enter Your full Name";
            return false;
          }

          emailError.style.padding="10px";
          if(email=='')
          {
            document.getElementById("emailError").innerHTML="Enter Your EmailID";
            return false;
          } else{
            emailError.style.display = 'none';
          }
          
          pswdError.style.padding="10px";
          if(pswd=='')
          {
            document.getElementById("pswdError").innerHTML="Enter Your passowrd";
            return false;
          } else{
            pswdError.style.display = 'none';
          }
          
          cpError.style.padding="10px";
          if(cpswd=='' || cpswd !== pswd)
          {
            document.getElementById("cpError").innerHTML="password not matched. ";
            return false;
          } else{
            cpError.style.display = 'none';
          }
          var confirm=document.getElementById("agreeTerms").value;
          icheck.style.padding="5px";
         if(agreeTerms.checked==false)
         {
         //alert("plz check the checkbox field");
         document.getElementById("icheck").innerHTML="plz check the checkbox field";
         //icheck.style.display = 'inline-block';
         return false;
         }
         else
         {
          icheck.style.display = 'none';
         }
}
    
        
    </script> 


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/error.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="regForm" onsubmit="return validation()">
     
       <input type="hidden" name="id" value='id' > 
       <div>
       <span style="padding:0px;background: #7eb5fc;text-align: center;width:100%;font-size: 17px;transition: all 0.5s ease;color:black;"><?php echo $msg?></span>
          <span id="nameError" class="nameError"></span>
          <div class="input-group mb-3">
          <input type="text" name="fullName" id="fullname"class="form-control" placeholder="Full name">
          <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            
        </div>  
         
        <div>
        <span style="padding:0px;background: #7eb5fc;text-align: center;width:100%;font-size: 17px;transition: all 0.5s ease;color:black;"><?php echo $emailErr?></span>
           <span id="emailError" class="emailError"></span>    
            <div class="input-group mb-3">
              <input type="email" name="Email" id= "Email"class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
        </div>

        <div>
           <span id="pswdError" class="pswdError"></span>
            <div class="input-group mb-3">
              <input type="password" name="password" id="password"class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
        </div>
        <div>
           <span id="cpError" class="cpError"></span>
            <div class="input-group mb-3">
              <input type="password" name="confirmpswd" id="confirmpswd" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
        </div>
         <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms"  value="agree" name="terms">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
            <span id="icheck" style="background:#7eb5fc;color:black;text-align: center;font-size: 15px;transition: all 0.5s ease;"></span>
          </div> 
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name ="submitButton" class="btn btn-primary btn-block" >Register</button>
            
          </div>
          <!-- /.col -->
        </div>
</form>
<!-- 
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
