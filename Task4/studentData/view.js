$(document).ready(function(e){

    $.ajax({
        url: 'view.php',
        type: "GET",
        success: function(response){
            
            var data =JSON.parse(response);
            var len = data.length;
            for(var i=0; i<len; i++){

            
               
                var studentId = data[i].studentId;
                var name = data[i].studentName;
                var chemMark = data[i].chemistryMarks;
                var phyMark = data[i].physicsMark;
                var mathMark = data[i].mathMark;
                var englishMark = data[i].englishMark;
                var lname = data[i].lecturerName;
                var rDate = data[i].resultDate;


                var tr_str = "<tr><td>" + (i+1) + "</td><td>" + name + "</td><td>" + chemMark + "</td><td>" + phyMark + "</td><td >" + mathMark + "</td><td >" + englishMark + "</td><td >" + lname + "</td><td>" + rDate + "</td>" +
                    "</tr>";

                $("#students").append(tr_str);
            }

        },
        error: function (error) 
        {
            console.log("hii");
            console.log(error);
        }
    });
});
// $.ajax({
//     url: "view.php",
//     type: "POST",
//     cache: false,
//     success: function(data){
//         // alert(data);
//         console.log(data);
//         $('#table').html(data); 
//     }

// });