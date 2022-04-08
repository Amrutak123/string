<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW RECORDS</title>
    <!-- <link rel="stylesheet" href="registration.css"> -->
    <style>
        body
        {
            background-color: rgb(234, 243, 243);
            align:center;
        }
        #users {
  font-family:  "Times New Roman", Times, serif;;
  border-collapse: collapse;
  width: 50%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 5px;
}

#users th {
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: left;
  background-color: grey;
  color: white;
}
button{
    background-color: #29cfcf;
    padding: 10px;
    display: inline-block;
    margin: 4px 2px;
   border-radius: 8px;
  border: none;
  cursor: pointer;
  width: 100%;
  float: left;
  

}
</style>
</head>
<body>
<?php
    $count=1;
    include "server.php";
    if (isset($_POST['submitButton'])) 
    {
        $id=$_POST['id'];
        
        $firstName=$_POST['firstname'];
        $middleName=$_POST['middlename'];
        $lastName=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        

        $sql="select * from users";
        $query=mysqli_query($connection,$sql);
    }

    ?>

    <h2>USER RECORDS</h2>
        <table id="users">
            <tr>
                <th>ID</th>
                <th>FIRSTNAME</th>
                <th>MIDDLENAME</th>
                <th>LASTNAME</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>OPERATIONS</th>
            </tr>
            <?php

                include "server.php";
                $sql="select * from users";
                $result=mysqli_query($connection,$sql);
                while($row=mysqli_fetch_array($result)){
            ?>
                <tr class="text-center">
                    <td> <?php echo $count++ ?> </td>
                    <td> <?php echo $row['firstname']; ?> </td>
                    <td> <?php echo $row['middlename']; ?> </td>
                    <td> <?php echo $row['lastname']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td> <?php echo $row['mobile']; ?> </td>                    
                    <td><button onclick="return confirm('click on ok to delete Information....');"><a href="delete.php? id=<?php echo $row['id'];?>" ><b>Delete</b></a></button>
                     <button><a href="update.php?id=<?php echo urlencode(base64_encode($row['id']));?>" ><b>Update</b></a></button> </td>
                </tr>
                <?php
                }
                ?>
                </table>

</body>
</html>