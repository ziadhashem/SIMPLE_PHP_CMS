<div id="Comments_Area">
		 <?php
		
			   $quary_String="select  avatar ,c.Content, c.date,username ,c.user_id from  posts p inner join  comments c on p.Post_id =c.post_id
			   inner join users u  on  c.user_id=u.user_id where p.Post_id=".$_GET['Post'];		    
			   $r= mysqli_query($conn,$quary_String);
			   
				while ($row = mysqli_fetch_row($r))
				{
					$Delete='';
					if($_SESSION['user_id'] ==$row[4])
					{
                       $Delete='<a href="#" ><span class="fa fa-trash-o"></span></a>';
					}
					echo '<div class="col-lg-12" style="background:#d2dae2; margin:5px;" >
					<div class="category" style="margin:10px;">
						
							<div class="col-md-2">
							   <img src="'.$row[0].'" class="img-responsive" width="50px";/>
							</div>
							<div class="col-md-10">
								<div class="content">
									 '.$row[1].'
									<hr/>
									<div> 
									   <div class="col-sm-4">
									        <p class="pull-right"><i class="fa fa-pencil"></i>  تم التعليق بواسطة  ' .$row[3].' </p>
									   </div>
									   <div class="col-sm-4">
                                           '.$Delete.'
									        
									   </div>
									   <div class="col-sm-4">
									        <p class="pull-left" ><i class="fa fa-clock-o"></i>  '.$row[2].' </p>
									   </div>
									</div>
									
								</div>
							</div>
						
					
					</div>		
				 </div> ';
			 
			  
				}  
				
			
		 ?>	 
		 <div id="curentComment">
		    
		 </div>
		 <!---- comments Area----->
		 <br><br><br><br>
		 <div  style="margin_buttom:10px;">
		      <div class="input-group">
				  <span class="input-group-addon" id="basic-addon1" ><i class="fa fa-comment"></i></span>
				  <input type="text" class="form-control" id="CommentInput" placeholder="أضف تعليق" aria-describedby="basic-addon1">
		      </div>
			  <br>
			  <div class="form-group"  style="margin_buttom:10px;"> 
					<div class="col-sm-offset-0 col-sm-12">
		     			<button type="submit" id="AddComment" name="<?php echo $_GET['Post'];?>" class="btn btn-primary"style="margin_buttom:10px;" >إضافة التعليق  </button>
					</div>						
			  </div>
			  
		 </div>
    </div>