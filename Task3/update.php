<?php
include "server.php";
$id='';
$firstName='';
$middleName='';
$lastName='';
$email='';
$mobile='';
$m1='';
$m2='';
$m3='';
$m4='';
$m5='';
$m6='';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['submit']))
    {
        $id=$_POST['id'];
        $firstName=$_POST['firstname'];
        $middleName=$_POST['middlename'];
        $lastName=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];

        $sql="UPDATE users SET firstname='$firstName',middlename='$middleName',lastname='$lastName',email='$email',mobile='$mobile' WHERE id='$id'";
        $result=mysqli_query($connection,$sql);
        if($result)
        {
            echo "Record updated successfully";
        }
        else
        {
            echo"Error: " . $sql . "<br>" .mysqli_error($connection);
        }
        header('location:view.php');
    }
}

$id=base64_decode(urldecode($_GET['id']));


    $sql="select * from users where id='$id' ";
    $result=mysqli_query($connection,$sql);
    $res=mysqli_fetch_array($result)?>
    <?php $res['id'];?>
    <?php $m1= $res['firstname']; ?> 
    <?php $m2= $res['middlename']; ?> 
    <?php $m3= $res['lastname']; ?>
    <?php $m4= $res['email']; ?>
    <?php $m5= $res['mobile']; ?>
    
    
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="container">
            <h1>Update Record</h1>
            <hr>
            <input type="hidden" name="id" value=<?php echo $id?>>
            <label for="fname"><b>First Name</b></label>
            
            <input type="text" placeholder="Enter First Name" name="firstname" value=<?php echo $m1;?> >
            <br>
            <label for="mname"><b>Middle Name</b></label>
           
            <input type="text" placeholder="Enter Middle Name" name="middlename" value=<?php echo $m2; ?>>
            <br>
            <label for="lname"><b>Last Name</b></label>
           
            <input type="text" placeholder="Enter Last Name" name="lastname" value=<?php echo $m3; ?>>
            <br>
            <label for="email"><b>Email</b></label>
           
            <input type="text" placeholder="Enter Email Id" name="email"value=<?php echo $m4; ?>  >
            <br>
            <label for="mobile"><b>Mobile No</b></label>
            
            <input type="text" placeholder="Enter Mobile Number" name="mobile" value=<?php echo $m5; ?>>
            <br>
            <button type="submit" name ="submit">update</button> 

</div>
</form>

</body>
</html>