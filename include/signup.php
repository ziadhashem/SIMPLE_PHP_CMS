 <head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<style>
						.error {color: #FF0000;}
			</style>
			<script src="../js/jquery.min.js"></script>
			
			<script>    
					function sleep_ms(millisecs)
					 {
						var initiation = new Date().getTime();
						while ((new Date().getTime() - initiation) < millisecs);
					}
					//////////////////////////////////////////////////
					$(document).ready(function(){
						$("#info").hide();
						$("#warning").hide();
						$("#img_load1").hide();
						$("#submit").click(function(){
							var username=$("#username").val();
							var password=$("#password").val();	
							var email=$("#email").val();
						    var phone=$("#phone").val();
							var gender=$("#gender").val();
						//	var image=$("#image")[0].files[0];
							var passwordconfirm=$("#passwordconfirm").val();
							var str='';
							var dataString='username='+username+'&password='+password+'&email='+email+'&phone='+phone+'&gender='+gender;
							if((username=='') ||(password=='')|| (email=='') || (passwordconfirm=='') )
							{
								$("#warning").show();
						    	$("#warning").html('الرجاء إدخال كافة الحقول المطلوبة');
								$("#info").hide();
							}
							else
							{
								 if(password != passwordconfirm)
								 {
									$("#warning").show();
									$("#warning").html('كلمة السر غير مطابقة ');
									$("#info").hide();
							  	 }	
								 else
								 {
									 $.ajax({
											type:"post",                                                                       
											url :"insert_user.php",                                                        
											data: dataString,
											
											cache:false,
											beforeSend: function(  ) {
												$("#img_load1").show();
											},
											success:function(result){
																				
												if(result.length<=6)
												{
													$("#warning").hide();
													$("#img_load1").hide();
													$("#info").html("تم تسجيلك بنجاح");
													$("#info").show();																									
													$("#username").val('');
													$("#password").val('');	
													$("#email").val('');
													$("#phone").val('');
													$("#passwordconfirm").val('');
													sleep_ms(2000);
													window.location.href = 'index.php' ;										
														
												}
												else
												{
													$("#img_load1").hide();
													$("#warning").show();
													$("#warning").html(result);
													$("#info").hide();
													
												}
														
											}
									 });
                                  
								}												
							}

							
													
						});
						
					});
		    </script>	
 </head>

 <?php
	
	
	// Example
	if (!isset($_SESSION)) { session_start(); }

	if(!empty($_SESSION))
	{
		header('Location: /cms/index.php');
	}
    include_once("header.php");
    include_once("Nav_And_Logo.php");
   	include_once("Aside.php");
?>
	<ol class="breadcrumb col-md-8" style="margin:5px; padding:5px;">
		<li><a href="index.php">الرئيسية</a></li>
		<li><a href="#">لوحة التسجيل </a></li>
	   
	</ol>

<article class="col-md-9 col-lg-9 art_bg"  style="background:#bdc3c7; margin-top: 8px; margin-bottom: 30px;">
             
			 <div class="panel panel-primary">
				  <div class="panel-heading text-center">التسجيل في الموقع</div>
				  <div class="well well-sm">
					  <div class="panel-body">
					      
					     <br><br><br>
               <div class="alert alert-success text-center" id="info">  </div>
			   <div class="alert alert-warning text-center" id="warning">  </div>
									<div class="form-group ">
										<label class="control-label col-sm-3 text-center " for="username"> اسم المستخدم</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" required  id="username" name="username" placeholder=" ">
										</div>
									</div>
							 
							    <br><br>

							  <div class="form-group ">
							    <label class="control-label col-sm-3 text-center" for="email">البريد الالكتروني</label>
							   	<div class="col-sm-9">
								        <input type="email" class="form-control"required id="email" name="email" placeholder="">											
								   </div>
							  </div>
							  <br><br>
							  <div class="form-group ">
							  	  <label class="control-label col-sm-3 text-center" for="gender"> الجنس </label>
                                  <div class="col-sm-8">
							   			<select style="width:30%;" id="gender">
											<option   value="ذكر"> ذكر </option>
											<option   value="انثى"> انثى </option>
										 </select>
							      </div>
							  </div>
								
								<br><br>
								<div class="form-group ">
										<label class="control-label col-sm-3 text-center" for="phone"> رقم الهاتف</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="phone" name="phone" placeholder=" ">
										</div>
								</div>

                <br/><br/>

							  <div class="form-group ">
							    <label class="control-label col-sm-3 text-center" for="password"> كلمة المرور</label>
							  	<div class="col-sm-9">
										 <input type="password"required class="form-control" id="password" name="password" placeholder=" ">
								  </div>
							  </div>
							 <br/><br/>

							  <div class="form-group ">
										<label class="control-label col-sm-3 text-center" for="passwordconfirm">تأكيد كلمة المرور</label>
										<div class="col-sm-9">
												<input type="password" required  class="form-control" id="passwordconfirm" name="passwordconfirm" placeholder="">
										</div>
							  </div>
							  <br>
							  <div class="form-group "> 
									<div class="col-sm-offset-3 col-sm-9">
									<div class="text-center" id="img_load1" > 	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> </div>
									</div>
								</div>	
							  <br><br>
						      <br><br><br>
							  <div class="form-group "> 
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" name="submit"  id="submit"  class="btn btn-primary" style="width:100%;">تسجيل  </button>
									</div>
								</div>	
								<br><br>

							  
							  <br><br><br>
							 
					
						
						 
					  </div>
				   </div>
			   </div>

</article>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	include_once("Footer.php");
?>
