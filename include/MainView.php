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
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="ControlPanel.php">لوحة التحكم</a></li>
                    <li><a href="MainView.php"> التحكم بالواجهة الرئيسية </a></li>
                </ol>
                <br>
                <br>
                <div class="col-sm-9">
                    <div class="panel panel-primary">
                    <div class="panel-heading ">اختيار مقالات مميزة للعرض في الرئيسية </div>

			        <div class="well well-sm">
			     	<div class="panel-body">
                        <!--------------------->
                        <div class="form-group">
                            <div class="row">
                                <label class="control-label  col-sm-2" for="Category1"> التصنيف الأول  </label>
                                <div class="col-sm-6">
                                    <select  style="width:50%;" id="Category1">
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
                                <label class="control-label  col-sm-2" for="NumOFCat1"> عدد المقالات </label>
                                <div class="col-sm-2">
                                    <input type="number" max="" name="NumOFCat1" class="form-control" id="NumOFCat1" >
                                </div>
                        </div>
                        </div>  			   
                       
                        <div id="SelectionOFCat1" class="col-sm-offset-2" >
                        </div>
                        <br>
                        <!--------------------->
                        <!--------------------->
                        <div class="form-group">
                            <div class="row">
                                <label class="control-label  col-sm-2" for="Category2"> التصنيف الثاني  </label>
                                <div class="col-sm-6">
                                    <select  style="width:50%;" id="Category2">
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
                                <label class="control-label  col-sm-2" for="NumOFCat2"> عدد المقالات </label>
                                <div class="col-sm-2">
                                    <input type="number" name="NumOFCat2" class="form-control" id="NumOFCat2" >
                                </div>
                        </div>
                        </div>  			   
                        <div id="SelectionOFCat2" class="col-sm-offset-2" >
                        </div>
                        <br>                
                        <!--------------------->
                        <div class="form-group">
                            <div class="row">
                                <label class="control-label  col-sm-2" for="Category3"> التصنيف الثالث  </label>
                                <div class="col-sm-6">
                                    <select  style="width:50%;" id="Category3">
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
                                <label class="control-label  col-sm-2" for="NumOFCat3"> عدد المقالات </label>
                                <div class="col-sm-2">
                                    <input type="number" name="NumOFCat3" class="form-control" id="NumOFCat3" >
                                </div>
                        </div>
                        </div>  			   
                        <div id="SelectionOFCat3" class="col-sm-offset-2" >
                        </div>
                        <br>
                        <!--------------------->
						<div class="form-group "> 
							<div class="col-sm-offset-3 col-sm-9">
								<div class="text-center" id="IMGLOAD" > 	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> </div>
							</div>
						</div>	
                        <div class="alert alert-Info text-center" id="info">  </div>
						<br>
                        <div class="form-group "> 
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" name="SubmitMainView"  id="SubmitMainView"  class="btn btn-primary" style="width:100%;">تثبيت </button>
							</div>
						</div>	
						<br><br>
                       
                          </div>
                          </div>
                         </div>
                        </div>	
                    </div>
</div>
</div>
<script src="../js/getPostForSelect.js"></script>
<script src="../js/MainView.js"></script>

<?php
     include_once("Footer.php");
?>
