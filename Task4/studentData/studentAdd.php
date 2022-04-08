<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../dist/css/student.css"> -->
    
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <b>AdminLTE</b>
        </div>
    
        <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg"><strong>Add Student</strong></p>
            <form id="registration" method="post">
                <div class="container">
                    <!-- <div>
                        <span id="idError" class="idError"></span>
                        <div class="input-group mb-3">
                        <input type="text" name="studentId" id="studentId" class="form-control" placeholder="Enter student ID">
                        <div class="input-group-append">
                                <div class="input-group-text">
                                    <span style="color:black"class="fa fa-id-card-o"></span>
                        </div>
                        </div>
                    </div> -->
                    <input type="hidden" name="lecturerId" id="lecturerId" class="form-control" placeholder="Enter lecturer ID">
                <div>
                    <span id="snError" class="snError"></span>
                    <div class="input-group mb-3">
                    <input type="text" name="studentName" id="sName" class="form-control" placeholder="Enter student Name">
                    <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                    </div>
                    </div>
                </div>
                
                <div>
                    <p> <strong>Subject Marks</strong></p>
                </div>
                <div>
                    <span id="chemError" class="chemError"></span>
                    <div class="input-group mb-3">
                    <input type="text" name="chemistryMark" id="cMarks" class="form-control" placeholder="Enter Chemistry Marks">
                    <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-book-reader"></span>
                            </div>
                    </div>
                    </div>
                </div>
                <div>
                    <span id="phyError" class="phyError"></span>
                    <div class="input-group mb-3">
                    <input type="text" name="physicsMark" id="pMarks" class="form-control" placeholder="Enter Physics Marks">
                    <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book-reader"></span>
                            </div>
                    </div>
                    </div>
                </div>
                <div>
                    <span id="phyError" class="phyError"></span>
                    <div class="input-group mb-3">
                    <input type="text" name="mathMark" id="mMarks" class="form-control" placeholder="Enter Mathematics Marks">
                    <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book-reader"></span>
                            </div>
                    </div>
                    </div>
                </div>
                <div>
                    <span id="engError" class="engError"></span>
                    <div class="input-group mb-3">
                    <input type="text" name="englishMark" id="eMarks" class="form-control" placeholder="Enter English Marks">
                    <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-book-reader"></span>
                            </div>
                    </div>
                    </div>
                </div>
                <br>
                <input type="hidden" name="total" id="total" class="form-control" >
                <div>
                <div class="input-group mb-3">
                    <label for="lecturer">Select lecturer: </label>
                    
                    <?php 
                    $lname='';
                    include_once("../server.php");
                        $sql="SELECT * FROM lecturer";
                        $res=mysqli_query($connection,$sql);
                        $rowCount=mysqli_num_rows($res);
                        ?>
                        <select name="lecturerName" id="lecturer"> 
                        <option value="">---NA---</option>
                        <?php 
                        for ($i=1;$i<=$rowCount;$i++)
                        {
                            $row=mysqli_fetch_assoc($res);
                            $lname=$row['lecturerName'];

                        echo"<option value='$lname'>$lname</option>";
                        }
                        ?>
                    </select>
                </div>
                </div>
                <div style="align-items:center;  ">
                    <button  type="submit" name ="add" class="btn btn-primary btn-block" id="add">Add Student</button>
                </div>
                <button  type="submit" name ="view" id="view"><a href="view.html">View Student Data </a></button>
            </form>
            
            </div>
       </div>
    </div>
<script src="../plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4  -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
<script type="text/javascript" src="addStudent.js"></script>       
</body>
</html>