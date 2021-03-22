$(document).ready(function(){
    $("#LOAD").hide();
    $("#InfoSave").hide();
    $("#submitConfig").click(function(){
        var sitename= $("#sitename").val();
        var discription=$("#discription").val();
        var logo1= $("#logo1")[0].files[0];
        var email=$("#email").val();
        var facebook=$("#facebook").val();
        var youtube=$("#youtube").val();
        var twitter=$("#twitter").val();
        var telegram=$("#telegram").val();
        var phone=$("#phone").val();
        var more_info=$("#more_info").val();

        var formData = new FormData();   
        if((sitename)!=null)
            formData.append("sitename", sitename); 
        if((discription)!=null)
            formData.append("discription",discription); 
        if((logo1)!=null)
            formData.append("logo1",logo1); 
        if((email)!=null)
            formData.append("email", email); 
        if((facebook)!=null)
            formData.append("facebook", facebook); 
        if((youtube)!=null)
            formData.append("youtube",youtube); 
        if((twitter)!=null)
            formData.append("twitter",twitter); 
        if((telegram)!=null)
            formData.append("telegram",telegram); 
        if((email)!=null)
            formData.append("email", email); 
        if((phone)!=null)
            formData.append("phone", phone); 
        if((more_info)!=null)
            formData.append("more_info", more_info); 
        
        

        $.ajax({
            type:"post",                                                                       
            url :"../include/addConfigAjax.php",
            data:formData,      
            enctype: 'multipart/form-data',
            processData: false,  // Important!
            contentType: false,
            cache:false,
            beforeSend: function(  ) {
                $("#LOAD").show();
            },
            success:function(result){
                alert(result);
                window.setTimeout(function(){
                    $("#InfoSave").show();
                    $("#InfoSave").html(result);  
                    $("#LOAD").hide(); 
                  
                },1300);
                clearTimeout();
                
                
             }

            });


    });
   
    
    
    
    
    
   
    
    
});