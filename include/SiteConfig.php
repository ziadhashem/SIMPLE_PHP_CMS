<?php  
    include_once("header.php");
	include_once("Nav_And_Logo.php");
?>
 <!-- Initialize the editor. -->
 <script> $(function() { $('textarea').froalaEditor() }); </script>

<div class="container-fluid ">
<div class="row">
		  <div class="col-sm-3">
						<?php include_once("GroupList.php");?>
			</div>
			<div class="col-sm-9" >
		   	  <ol class="breadcrumb col-md-10 " style="margin:10px; padding:10px;">
					<li><a href="../index.php">الرئيسية</a></li>
					<li><a href="../include/ControlPanel.php">لوحة التحكم</a></li>
					<li><a href="../include/SiteConfig.php">   الإعدادات العامة    </a></li>
              </ol>
			  <br>
              
<!--==============================================================================-->
<div class="col-sm-8">
        <form form-horizontal>
		<div class="well well-lg">
			
					<br><br>						   
					<div class="form-group">
						<label class="control-label col-sm-2" for="sitename"> اسم الموقع </label>
						<div class="col-sm-10">
							<input type="text" name="sitename" class="form-control" id="sitename" placeholder="اسم الموقع ">
						</div>
					</div>
						   
					<br><br>
							   
				   <!------->
				   <div class="form-group" style="margin-bottom:2%;">
						<label class="control-label col-sm-2" for="logo1"> شعار الموقع </label>
						<div class="col-sm-10">
							<input type="file" name="logo1" class="form-control" id="logo1" placeholder="اختر شعار للموقع ">
						</div>
					</div>
					<br><br>
	
					 <!------->
						<div class="form-group" style="margin: 5px;">
							<label class="control-label col-sm-2" for="discription"> توصيف الموقع</label>
							<div class="col-sm-10" style="height: 250px; overflow-y:auto; overflow-x: hidden;">
								<textarea class="form-control" rows="3" id="discription"></textarea>
							</div>
						</div>
					  <!------->
				 
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				   
					<div class="form-group" style="margin-bottom:2%;">
						<label class="control-label col-sm-2" for="email"> <i class="fa fa-envelope fa-2x" aria-hidden="true"></i></label>
						<div class="col-sm-10">
							<input type="text" name="email" class="form-control" id="email" placeholder=" أدخل البريد الإلكتروني   ">
						</div>
					</div>	   
					
					<br><br>
							   
				  
				   <!------->
					<div class="form-group">
						<label class="control-label col-sm-2" for="facebook"> <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></label>
						<div class="col-sm-10">
							<input type="text" name="facebook" class="form-control" id="facebook" placeholder="ادخل رابط فيس بوك">
						</div>
					</div>
					<br><br>
						 <!------->
				   <div class="form-group">
						<label class="control-label col-sm-2" for="youtube"> <i class="fa fa-youtube fa-2x" aria-hidden="true"></i></label>
						<div class="col-sm-10">
							<input type="text" name="youtube" class="form-control" id="youtube" placeholder="ادخل رابط  قناة يوتيوب ">
						</div>
					</div>
					<br><br>
				  
								   
				   <!------->
				    <div class="form-group">
						<label class="control-label col-sm-2" for="twitter"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></label>
						<div class="col-sm-10">
							<input type="text" name="twitter" class="form-control" id="twitter" placeholder="ادخل رابط صفحة  تويتر">
						</div>
					</div>
						   
					<br><br>
						   
				   <!------->
				    <div class="form-group">
						<label class="control-label col-sm-2" for="telegram" > <i class="fa fa-telegram fa-2x"  aria-hidden="true"></i></label>
						<div class="col-sm-10">
							<input type="text" name="telegram" class="form-control" id="telegram" placeholder="ادخل رايط تلغرام ">
						</div>
					</div>
					<br><br>
					
				     <!------->
					 <div class="form-group">
						<label class="control-label col-sm-2" for="phone"> <i class="fa fa-phone fa-2x" aria-hidden="true"></i></label>
						<div class="col-sm-10">
							<input type="text" name="phone" class="form-control" id="phone" placeholder=" ادخل رقم هاتف للتواصل  ">
						</div>
					</div>
					<br><br>
				
				     <!------->
					
				    <div class="form-group">
						<label class="control-label col-sm-2" for="more_info">معلومات إضافية </label>
						<div class="col-sm-10" style="height: 250px; overflow-y:auto; overflow-x: hidden;">
                              <textarea class="form-control" rows="5" id="more_info"></textarea>
						</div>
					</div>
					<br><br><br><br><br><br><br><br>
					<br><br>
					<!------->
                     <div class="form-group "> 
						<div class="col-sm-offset-3 col-sm-9">
						    <div class="text-center" id="LOAD" > 	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> </div>
						</div>
					</div>	
					<br><br>
					<br><br>
                     <!------->

					<div class="alert alert-info text-center" id="InfoSave">  </div>	
				   <!------->
				   <br>
				   <br>
				   <div class="form-group"> 
						<div class="col-sm-12">
							<button type="submit" name="submitConfig" id="submitConfig" class="btn btn-primary" style="width:100%;">حفظ التغيرات  </button>
						</div>
					</div>
					<br><br>
					<br><br>
											  
					<!------->

	        
		</div>	
	</div>	
    <!--==============================================================================-->

			</div>				
			</div>
</div>
</div>
<script src="../js/SiteConfig.js"></script>
	<?php
     include_once("Footer.php");
?>
