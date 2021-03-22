


 $(document).ready(function(){
    
    $("#img_load3").hide();
    $("#AddInfo").hide();
     
    $("#submitPost").click(function(){
          
        var postName= $("#PostName").val();
        var PostImage= $("#PostImage")[0].files[0];
        var Category= $("#Category").val();
        var PostStatus= $("#PostStatus").val();
        var postContent= $("#PostContent").val();
        if(Category==-1)
        {
            $("#AddInfo").show();
             $("#AddInfo").html("أدخل التصنيف المناسب ");
        }
        else
        {
           if(postContent=='')
           {
               $("#AddInfo").show();
               $("#AddInfo").html("أدخل المحتوى ");
           }
           else
            {
                if(postName=='')
                {
                    $("#AddInfo").show();
                    $("#AddInfo").html("أدخل عنوان المقال  ");
                }
                else
                {       
                    var formData = new FormData();   
                    formData.append("postName", postName); 
                    formData.append("Category", Category); 
                    formData.append("postContent",postContent); 
                    formData.append("PostStatus", PostStatus); 
                    formData.append("PostImage", PostImage); 
                    


                    $.ajax({
                        type:"post",                                                                       
                        url : "../include/addPostAjax.php",
                        data:formData,// {'postName':postName,'Category':Category,'postContent':postContent,'PostStatus':PostStatus},      
                        enctype: 'multipart/form-data',
                        processData: false,  // Important!
                        contentType: false,
                        cache:false,
                        beforeSend: function(  ) {
                            $("#img_load3").show();
                        },
                        success:function(result){
                            $("#AddInfo").show();
                            $("#AddInfo").html(result);  
                            $("#img_load3").hide();  
                            window.setTimeout(function(){
                                $("#AddInfo").hide(); 
                                $("#PostName").val('');                           
                                $("#Category").val(-1);
                                $("#PostStatus").val('publish');
                                $("#PostImage").val(null);   
                                $("#PostContent").dro                           
                            },1300);
                            clearTimeout();
                           
                         }

                        });
                    
                }

            }


        }

       
    });

});

