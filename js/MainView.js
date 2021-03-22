

/////////////////////////////////////////////////
$(document).ready(function(){
    $("#IMGLOAD").hide();
    $("#info").hide();
    
    /////////////////////////////////////////////////
    $("#SubmitMainView").click(function(){
        var Category1=$("#Category1").val();
        var Num1=$("#NumOFCat1").val();
        var Category2=$("#Category2").val();
        var Num2=$("#NumOFCat2").val();
        var Category3=$("#Category3").val();
        var Num3=$("#NumOFCat3").val();
        var formData = new FormData();

        if((Num1>0) && (Category1>-1))
        {
            formData.append("Category1",Category1); 
            formData.append("Num1",Num1); 
            var Count=1;
            while (Count<=Num1)
            {
                var selection="C1"+"_"+"P"+Count.toString();       
                var p=$("#"+selection).val();
                formData.append(selection,p); 
                Count++;
            }

        }
        if((Num2>0) && (Category2>-1))
        {
            formData.append("Category2",Category2); 
            formData.append("Num2",Num2); 
            var Count=1;
            while (Count<=Num2)
            {
                var selection="C2"+"_"+"P"+Count.toString();       
                var p=$("#"+selection).val();
                formData.append(selection,p); 
                Count++;
            }

        }
        if((Num3>0) && (Category3>-1))
        {
            formData.append("Category3",Category3); 
            formData.append("Num3",Num3); 
            var Count=1;
            while (Count<=Num3)
            {
                var selection="C3"+"_"+"P"+Count.toString();       
                var p=$("#"+selection).val();
                formData.append(selection,p); 
                Count++;
            }

        }
        $.ajax({
            type:"post",                                                                       
            url :"../include/MainAjax.php",
            data:formData,//       
            processData: false,  // Important!
            contentType: false,
            cache:false,
            beforeSend: function(  ) {
                $("#IMGLOAD").show();
                $("#info").hide();
            },
            success:function(result){ 
                $("#IMGLOAD").hide();
                $("#info").show();
                $("#info").html(result); 
                window.setTimeout(function(){
                  //  $("#info").hide();           
                },1300);
                clearTimeout();
               
             }
            });
       
          
    });
    /////////////////////////////////////////////////
});