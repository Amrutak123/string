<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="registration.css">
    
    
</head>

<body>

<?php

include_once("server.php");
$id='';
$firstName='';
$middleName='';
$lastName='';
$email='';
$mobile='';
$Message='';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
        $id=$_POST['id'];
        $firstName= $_POST['fname'];
        $middleName= $_POST['mname'];
        $lastName=$_POST['lname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $submitbtn=$_POST["submitButton"];
       
        $sql ="INSERT INTO users (firstName,middleName, lastName, email,mobile)
        VALUES ('$firstName','$middleName','$lastName','$email','$mobile')";
        $result=mysqli_query($connection, $sql);
        if ($result) 
        {
            echo "<script>alert('New record created successfully');</script>";
           // header('location:view.php');

        } else 
        {
        echo"Error: " . $sql . "<br>" .mysqli_error($connection);
        }
        
        
}
         
?>


    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="container">
            <h1>Register</h1>
            <hr>
            <input type="hidden" name="id" value='id' >

            <label for="fname"><b>First Name</b></label>
            
            <input type="text" placeholder="Enter First Name" name="fname" id="fname" required>
            <br>
            <label for="mname"><b>Middle Name</b></label>
           
            <input type="text" placeholder="Enter Middle Name" name="mname" id="mname" required>
            <br>
            <label for="lname"><b>Last Name</b></label>
           
            <input type="text" placeholder="Enter Last Name" name="lname" id="lname" required>
            <br>
            <label for="email"><b>Email</b></label>
           
            <input type="text" placeholder="Enter Email Id" name="email" id="email" required>
            <br>
            <label for="mobile"><b>Mobile No</b></label>
            
            <input type="text" placeholder="Enter Mobile Number" name="mobile" id="mobile" required>
            <br>
            
            
            <button type="submit" class="registerbtn"name ="submitButton">Register </button> 
             <button  for="view"><b><a href="http://localhost/Task/Task3/view.php">View Records.</a></b></button>             </div> 
             </div>  


        </form>
        
</body>

</html>
