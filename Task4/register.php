<?php 
include_once("server.php");


// $id='';
$fullName='';
$email='';
$pswd='';
$stmt='';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  
if (isset($_POST['submitButton'])) {
  $email = $_POST['Email'];

  $email_query = "SELECT * FROM user_details WHERE Email='$email' ";
  $email_query_run = mysqli_query($connection, $email_query);
  if (mysqli_num_rows($email_query_run) > 0) {
      echo "email taken already";
  }
} 
else {
       if(isset($_POST['fullName']) && isset($_POST['Email']) && isset($_POST['password']))
       {
        $fullName= $_POST['fullName'];
        $pswd=$_POST['password'];
        $email=$_POST['Email'];
    
        $sql ="INSERT INTO user_details (fullName,Email,password)
        VALUES ('$fullName','$email','$pswd')";
        $result=mysqli_query($connection, $sql);
       }
}
}