// var button = document.getElementById("addlecturer");

$(document).on('click','#addlecturer',function(event) {
  // button.onclick(function (event){
  event.preventDefault();
  var lectNm = document.getElementById("lName").value; 
$.ajax({
  type: "POST",
  url:"addlecturer.php",	

  data:{
    
    lecturerName : lectNm,
  },
  success: function (data) 
  {  
    console.log('success');
    console.log(data);
        
    //alert("Registration successfully");,,,,
       

  },
  error: function (error) 
  {
    console.log('error');
      console.log(error);
  }
});
})