
<?php

    $count=1;
	$id='';
	$return_arr = array();
	if ($_SERVER["REQUEST_METHOD"] == "GET")
	{ 
		//$id=$_POST['studentId'];
		include_once("../server.php");
		
		
		$sql1="SELECT student.studentId, student.studentName, student.chemistryMarks, student.physicsMark, student.mathMark, student.englishMark, lecturer.lecturerName, student.resultDate
		FROM student INNER JOIN lecturer ON student.lecturerId=lecturer.lecturerId ";
		$result=mysqli_query($connection,$sql1);
		if ($result->num_rows > 0) 
		{
			$resultArray=array();
			while($row=mysqli_fetch_assoc($result))
			{
				$resultArray[]=$row;
			}
		
			echo json_encode($resultArray);
			?>
		
		<?php	
		}
		else 
		{
			echo "0 results";
		}
		mysqli_close($connection);
	}
	?>
