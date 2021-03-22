<?php  
    include_once("header.php");
	include_once("Nav_And_Logo.php");
?>

<div class="container-fluid ">
<div class="row">
		    <div class="col-sm-3">
				<?php include_once("GroupList.php");?>
			</div>
			<div class="col-sm-9" >
		   	  <ol class="breadcrumb col-md-10 " style="margin:10px; padding:10px;">
					<li><a href="../index.php">الرئيسية</a></li>
					<li><a href="../include/ControlPanel.php">لوحة التحكم</a></li>
					<li><a href="#">  إضافة مقال</a></li>
              </ol>
			  <br>
              
<!--==============================================================================-->
<div class="col-sm-8">
            <div class="panel panel-primary">
			<div class="panel-heading ">إضافة مقال</div>

			  <div class="well well-sm">
				<div class="panel-body">
                    <div class="alert alert-info text-center" id="AddInfo">  </div>
                    <br>                		   
					<div class="form-group">
						<label class="control-label col-sm-2" for="PostName"> اسم المقال </label>
						<div class="col-sm-10">
							<input type="text" name="PostName" class="form-control" id="PostName" placeholder="أدخل عنوان المقال ">
						</div>
					</div>
                    <br> <br>	   
								   
				   <!------->
				   <div class="form-group">
						<label class="control-label col-sm-2" for="PostImage"> صورة المقال </label>
						<div class="col-sm-10">
							<input type="file" enctype="multipart/form-data" name="PostImage" class="form-control" id="PostImage" placeholder="اختر صورة مناسبة للمقال ">
						</div>
					</div>
                    <br> <br>	
                     <!------->
					 <div class="form-group">
						<label class="control-label col-sm-2" for="Category"> التصنيف </label>
						<div class="col-sm-10">
                            <select  style="width:50%;" id="Category">
                                <option  class="form-control" value=-1>اختر التصنيف </option>
                                <?php             
                                    $quary_String="select * from `cms`.`categories`";
                                    $conn=mysqli_connect('localhost','root','','cms');
                                    $r= mysqli_query($conn,$quary_String);
                                    while( $row = mysqli_fetch_row($r)) 
                                    {
                                          echo'<option  class="form-control" value="'.$row[0].'"> '.$row[1].' </option>';
                                    }          
                                ?>
								
							 </select>
						</div>
					</div>  			   
				   <!------->
                   <br><br>
                     <div class="form-group">
						<label class="control-label col-sm-2" for="PostStatus"> الحالة </label>
						<div class="col-sm-10">
                            <select  style="width:50%;" id="PostStatus">
								<option  class="form-control" value="publish">نشر </option>
								<option  class="form-control" value="draft"> تعطيل </option>
							 </select>
						</div>
					</div>  			   
				   <!------->
                   <br><br>
				    <div class="form-group">
						<label class="control-label col-sm-2" for="PostContent"> محتوى المقال</label>
						<div class="col-sm-10">
						    <textarea class="form-control" rows="5" id="PostContent"></textarea>
						</div>
					</div>
                    <br><br>
                     <!------->
                     <div class="form-group "> 
						<div class="col-sm-offset-3 col-sm-9">
						    <div class="text-center" id="img_load3" > 	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> </div>
						</div>
					</div>	
                     <!------->
                     <br><br><br><br>
                    <div class="form-group "> 
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" name="submit"  id="submitPost"  class="btn btn-primary" style="width:100%;">إضافة المقال </button>
						</div>
					</div>	
									
            </div>	
	</div>	
	</div>
		</div>	
	</div>	
    <!--==============================================================================-->

						
			
</div>
</div>
<script src="../js/AddPost.js"></script>
<?php
     include_once("Footer.php");
?>

