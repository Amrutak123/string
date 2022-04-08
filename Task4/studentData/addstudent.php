<?php

include_once("../server.php");
$studentName='';
$chemMarks='';
$phyMarks='';
$mathMarks='';
$engMarks='';
$id='';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
  if(isset($_POST['studentName']) && isset($_POST['chemistryMark']) && isset($_POST['physicsMark'])&& isset($_POST['mathMark']) && isset($_POST['englishMark']) && isset($_POST['lecturerName']))
  { 
  
        $studentName= $_POST['studentName'];
        $chemMarks= $_POST['chemistryMark'];
        $phyMarks=$_POST['physicsMark'];
        $mathMarks=$_POST['mathMark'];
        $engMarks=$_POST['englishMark'];
        $total=$_POST['total'];
        $FinalResult=$_POST['res'];
        $ln=$_POST['lecturerName'];
        //echo "res".$res;
        
        $sql="SELECT lecturerId FROM lecturer WHERE lecturerName='$ln'";
        $res=mysqli_query($connection,$sql);
        $rowCount=$res->fetch_assoc();
        $id= $rowCount["lecturerId"];
        //echo $id;

        $sql ="INSERT INTO student (studentName,chemistryMarks,physicsMark,mathMark,englishMark,total,result,lecturerId)
        VALUES ('$studentName','$chemMarks','$phyMarks','$mathMarks','$engMarks','$total','$FinalResult','$id')";
        //$sql ="INSERT INTO student SELECT lecturerId FROM lecturer WHERE lecturerName='$ln'";
        $result=mysqli_query($connection,$sql);
        if ($result == TRUE) 
        {
            echo "New student added successfully";
           // header('location:view.php');

        } else 
        {
        echo"Error: " . $sql . "<br>" .mysqli_error($connection);
        
        }

      }
    }
?>
      

    
      
    
  
