<?php
include 'server.php';
session_start();
$email='';
$pswd='';
$sql='';
if(isset($_POST['submit']))
{
    
    $email=$_POST['email'];
    $pswd=$_POST['password'];
    $rem=$_POST['remember'];

    if($rem==1)
    {
      setcookie('email' , $email, time()+60*60,"/");
      setcookie('pass' , $pswd, time()+60*60,"/");
    }



    $sql = "SELECT * FROM user_details where  email='$email' and Password='$pswd'";
    $results = mysqli_query($connection, $sql);
    //$sql=mysqli_query($connection,
    $row  = mysqli_fetch_array($results);
    //$row  = mysqli_num_rows($results);
    if(is_array($row))
    //if($row==1)
    
    {
      if(isset($row['fullName']))
      {
        $_SESSION["Email"]=$row['Email'];
       $_SESSION["password"]=$row['password'];
       $_SESSION["fullName"]=$row['fullName'];
       
        header("Location: index.php"); 
        //echo "login successfully.";
    }
  }
    else
    {
      echo "Invalid email/password";
    }
    
    // if(is_array($row))
    // {
    //     //$_SESSION["Email"]!=$row['Email'];
    //     $_SESSION["password"]=$row['password'];
    //     //header("Location: home.php"); 
    //     echo "login successfully.";
    // }
    // else
    // {
    //     echo "Invalid  Password";
    // }
    
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="input-group mb-3">
          <input type="email" id="email"name="email" class="form-control" placeholder="Email" value="<?php if(isset ($_COOKIE["email"])){echo $_COOKIE["email"]; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"  id="password"name="password" class="form-control" placeholder="Password" value="<?php if(isset ($_COOKIE["pass"])){echo $_COOKIE["pass"]; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" value="1">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" id="submit"class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-Password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="registeration.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
