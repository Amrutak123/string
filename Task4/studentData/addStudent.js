var button = document.getElementById("add");

button.onclick=function (event) {
  event.preventDefault();
  //var studentId=document.getElementById("studentId").value;
    var studentNm = document.getElementById("sName").value; 
    var chemMark = document.getElementById("cMarks").value;
    var phyMark = document.getElementById("pMarks").value;
    var mathMark = document.getElementById("mMarks").value;
    var englishMark = document.getElementById("eMarks").value;
    var lect=document.getElementById("lecturer").value;
    var total= +chemMark + +phyMark + +mathMark + +englishMark;
    var per= total/400*100;
    console.log(per);
    var result;
    if(per>=75 && per<=100)
    {
      result="Distinction";
      console.log(result);
    }
    else if(per<75 && per>=60)
    {
      result="First Class";
    }
    else if(per<60 && per>=45)
    {
      result="Second Class "
    }
    else if(per<45 && per>=35)
    {
      result="Pass";
    }
    else if(per<35)
    {
      result="Fail";
    }

$.ajax({
  type: "POST",
  url:"addstudent.php",	

  data:{
    //studentId:studentId,
    studentName : studentNm,
    chemistryMark	:chemMark,
    physicsMark:phyMark,
    mathMark:mathMark,
    englishMark:englishMark,
    lecturerName:lect,
    total:per,
    res:result,
  },
  success: function (data) 
  { 
    console.log(data);
        
    //alert("Registration successfully");,,,,
       

  },
  error: function (error) 
  {
      console.log(error);
  }
});
}

