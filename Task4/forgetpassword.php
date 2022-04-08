<?php
  
  include './server.php';
  $email='';
  
 if ($_SERVER["REQUEST_METHOD"] =="POST")
 {
    
 
  if(isset($_POST['email']) )
  {

      $email=$_POST['email'];
      $sql = "SELECT * FROM user_details where  Email='$email'";
      $results = mysqli_query($connection, $sql);
      $row  = mysqli_fetch_array($results);
      if(is_array($row))
      {
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,8);
        
        $sql = "UPDATE user_details SET password='$pwd' WHERE Email='$email'";
       mysqli_query($connection, $sql);
       echo "<strong>New password is : </strong> ".$pwd;
       echo "<strong> <br> updated succesfully</strong>";
      }
      else{
        echo "not updated";
      }
    }
}
  ?>