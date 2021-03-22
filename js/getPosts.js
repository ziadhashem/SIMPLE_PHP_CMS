


$(document).ready(function(){
    getPosts(1);
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  //---------------------------
 
});
 function getPosts(id)
 {
    var dataString='page='+id;
        $.ajax({
				type:"post",                                                                       
				url :"../include/getPosts.php",
				data: dataString,
				cache:false,
				success:function(result)
				{                  
                    $("#myTable").show();
                    $("#myTable").html(result);               
                }
            });  
           
 }


