function sleep_ms(millisecs)
{
	var initiation = new Date().getTime();
	while ((new Date().getTime() - initiation) < millisecs);
					

}
//---------------------------------------------------------
$(document).ready(function(){

	$("#info2").hide();
	$("#warning2").hide();
	$("#img_load").hide();
	
	//============	controlPanel===========

	$("#controlPanel").click(function(){
		window.location.href = '../include/ControlPanel.php'
		
	});
	//============ logout ===============
	$("#logout").click(function(){
		window.location.href = '../include/logout.php'
	});
	//=========== login ==============
	$("#login").click(function(){
 
		$("#info2").hide();
		$("#warning2").hide();
		var email=$("#email1").val();
		var password=$("#pwd").val();
		var dataString='password='+password+'&email='+email;
		var MsgError='';
		var MsgSuccess='';
		
		if((email=='')||(password==''))
		{
			$("#warning2").show();
			MsgError='يرجى إدخال الحقول ';
			$("#warning2").html(MsgError);
		}
		else
		{
			$.ajax({
				type:"post",                                                                       
				url :"../include/login_user.php",
				data: dataString,
				cache:false,
				beforeSend: function(  ) {
					$("#img_load").show();
				  },
				success:function(result)
				{
					
					if(result != '')
					{
						
						$("#info2").hide();
						$("#warning2").show();
						$("#warning2").html(result);
					}
					else
					{
						$("#warning").hide();
						MsgSuccess='تم تسجيل الدخول بنجاح ';
						$("#info2").show();
						$("#info2").html(MsgSuccess);
						sleep_ms(2000);
						window.location.href = '../include/index.php' ;
						$("#email1").val('');
		                $("#pwd").val('');
						
					}
					
					
					
					
				}
				
		       });
		}

		
	});
	
    //===============================
});
