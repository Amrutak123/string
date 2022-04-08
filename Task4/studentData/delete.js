$(document).ready(function() {
	$.ajax({
		url: "view.php",
        type: "POST",
        cache: false,
        success: function(data){
            // alert(data);
            console.log(data);
            $('#table').html(data); 
    }

	});
	$(document).on("click", ".delete", function() { 
		var $ele = $(this).parent().parent();
		$.ajax({
			url: "delete.php",
			type: "POST",
			cache: false,
			data:{
				id: $(this).attr("StudentId")
			},
			success: function(dataResult){
				var dataResult = JSON.parse(dataResult);
				if(dataResult.statusCode==200){
					$ele.fadeOut().remove();
				}
			}
		});
	});
});

// $(document).on("click", ".delete", function() { 
    
//     var id = $(this).data("studentId");
//     console.log(id); 
//     $.ajax({
//       url: "delete.php",
//       type: "POST",
//       cache: false,
//       data:{
//         studentId: id,
        
//       },
//       success: function(data)
          
//         { 
            
//             console.log(data);       

//         },
//         error: function (error) 
//         {
//             console.log(error);
//         }
//         });
//         })
