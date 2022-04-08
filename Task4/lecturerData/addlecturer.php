<?php

include_once("../server.php");
$lectName='';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
 
  if(isset($_POST['lecturerName']))
  { 
    
        $lectName= $_POST['lecturerName'];
        $sql ="INSERT INTO lecturer (lecturerName) VALUES ('$lectName')";
        $result=mysqli_query($connection,$sql);
        if ($result == TRUE) 
        {
            echo "New lecturer added successfully";
           // header('location:view.php');

        } 
        else 
        {
        echo"Error: " . $sql . "<br>" .mysqli_error($connection);
        
        }

      }
    }
    ?>
    
<!-- onclick="return confirm('click on ok to delete Information....');" -->
<!-- 
		<tr>
            <td> <?php //echo $count++ ?> </td>
			<td><?=//$row['studentName'];?></td>
			<td><?=//$row['chemistryMarks'];?></td>
			<td><?=//$row['physicsMark'];?></td>
			<td><?=//$row['mathMark'];?></td>
            <td><?=//$row['englishMark'];?></td>
			<td><?=//$row['total'];?></td>
			<td><?=//$row['result'];?></td>
            <td><?=//$row['lecturerName'];?></td>
            <td><?=//$row['resultDate'];?></td>
             -->