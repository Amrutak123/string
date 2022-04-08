<?php
include 'server.php';
    $id=$_GET['id'];
   
    $sql="DELETE FROM users WHERE id = $id";
    $result=mysqli_query($connection, $sql);
    
    if($result)
    {
        echo "deleted successfully";
    }
    else
    {
         die(mysqli_error($connection));
     }
    //header('location: view.php');
?>
