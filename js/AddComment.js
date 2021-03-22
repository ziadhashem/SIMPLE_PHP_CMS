 $(document).ready(function(){
   
   
    $("#AddComment").click(function(){
        var Comment=$("#CommentInput").val();
        var post=$("#AddComment").attr('name');
        
        if(Comment != '')
        {
            var dataString='Comment='+Comment+"&post="+post;
            $.ajax({
                type:"post",                                                                       
                url :"../include/addCommentAjax.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    var Str=$("#curentComment").html();
                    $("#curentComment").html(Str+result);
                 }
    
                });
        }
        
    });

 });
