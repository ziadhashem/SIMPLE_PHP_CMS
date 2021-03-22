
////////////////////////////////////
$(document).ready(function(){
    /////////////////////////////////////////////////
    $("#Category1").click(function(){
        
        var Category=$("#Category1").val();
        var Num=$("#NumOFCat1").val();
        
        if((Category > -1) &&(Num>0))
        {
          
            var dataString='Category='+Category+"&Num="+Num+"&cat="+1;
            $.ajax({
                type:"post",                                                                       
                url :"../include/getPostForSelect.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    $("#SelectionOFCat1").show();
                    $("#SelectionOFCat1").html(result);
                 }
                });
        } 
        else
        {
            $("#SelectionOFCat1").hide();
        }
    });
    /////////////////////////////////////////////////////
    $("#NumOFCat1").click(function(){
        
        var Category=$("#Category1").val();
        var Num=$("#NumOFCat1").val();
        
        if((Category > -1) &&(Num>0))
        {
            
            var dataString='Category='+Category+"&Num="+Num+"&cat="+1;
            $.ajax({
                type:"post",                                                                       
                url :"../include/getPostForSelect.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    $("#SelectionOFCat1").show();
                    $("#SelectionOFCat1").html(result);
                 }
                });
        } 
        else
        {
            $("#SelectionOFCat1").hide();
        }
    });
    /////////////////////////////////////////////////////
    
    $("#Category2").click(function(){
        var Category=$("#Category2").val();
        var Num=$("#NumOFCat2").val();
        
        if((Category > -1) &&(Num>0))
        {
            var dataString='Category='+Category+"&Num="+Num+"&cat="+2;
            $.ajax({
                type:"post",                                                                       
                url :"../include/getPostForSelect.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    $("#SelectionOFCat2").show();
                    $("#SelectionOFCat2").html(result);
                 }
                });
        }
        else
        {
            $("#SelectionOFCat2").hide();
        }

        
    });
    //////////////////////////////////////////////////////
    $("#NumOFCat2").click(function(){
        var Category=$("#Category2").val();
        var Num=$("#NumOFCat2").val();
        
        if((Category > -1) &&(Num>0))
        {
            var dataString='Category='+Category+"&Num="+Num+"&cat="+2;
            $.ajax({
                type:"post",                                                                       
                url :"../include/getPostForSelect.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    $("#SelectionOFCat2").show();
                    $("#SelectionOFCat2").html(result);
                 }
                });
        }
        else
        {
            $("#SelectionOFCat2").hide();
        }

        
    });
    //////////////////////////////////////////////////////
    $("#Category3").click(function(){
        var Category=$("#Category3").val();
        var Num=$("#NumOFCat3").val();
        
        if((Category > -1) &&(Num>0))
        {
            var dataString='Category='+Category+"&Num="+Num+"&cat="+3;
            $.ajax({
                type:"post",                                                                       
                url :"../include/getPostForSelect.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    $("#SelectionOFCat3").show();
                    $("#SelectionOFCat3").html(result);
                 }
                });
        }
        else
        {
            $("#SelectionOFCat3").hide();
        }

          
    });
    //////////////////////////////////////////////////////
    $("#NumOFCat3").click(function(){
        var Category=$("#Category3").val();
        var Num=$("#NumOFCat3").val();
        
        if((Category > -1) &&(Num>0))
        {
            var dataString='Category='+Category+"&Num="+Num+"&cat="+3;
            $.ajax({
                type:"post",                                                                       
                url :"../include/getPostForSelect.php",
                data:dataString,      
                cache:false,
                success:function(result){
                    $("#SelectionOFCat3").show();
                    $("#SelectionOFCat3").html(result);
                 }
                });
        }
        else
        {
            $("#SelectionOFCat3").hide();
        }

          
    });
    //////////////////////////////////////////////////////
});
   