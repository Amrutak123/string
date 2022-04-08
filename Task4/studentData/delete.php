<?php
include_once("../server.php");
if(isset($_POST['studentId']))
{
    $id = $_POST['studentId'];
    echo $id;
    $query = "DELETE FROM student WHERE studentId='$id'"; // Delete data from the table customers using id
    $result = mysqli_query($connection, $query);
    if($result)
    {
        echo "deleted successfully";
        
    }
    else
    {
        echo "Error: " . $query . "" . mysqli_error($connection);
     }
     //header('location:./view.html');
    }
?>

