<?php
    include_once("header.php");
    include_once("Nav_And_Logo.php");
	include_once("Aside.php");
?>

<article class="col-md-9 col-lg-9 art_bg" style=" background:#bdc3c7;">
          
        <ol class="breadcrumb" style="margin:5px;">
		<li><a href="../index.php">الرئيسية</a></li>
	    <li><a href="Categories.php">التصنيفات</a></li>
		
		<?php
		        $id=$_GET['Post'];
				$quary_String="select name ,posts.Category_id from Posts inner join  Categories on  Posts.Category_id=Categories.Category_id where Post_id=".$id;
				$conn=mysqli_connect('localhost','root','','cms');
				$r= mysqli_query($conn,$quary_String);
				while( $row = mysqli_fetch_row($r)) 
				{
					 echo '<li><a href="../include/Category.php?Category='.$row[1].'">'.$row[0].'</a></li>';
				}
		  ?>
		
		
		
		  <li><a href="#">
		  <?php
		        $id=$_GET['Post'];
				$quary_String="select * from `cms`.`Posts` where Post_id=".$id;
				$conn=mysqli_connect('localhost','root','','cms');
				$r= mysqli_query($conn,$quary_String);
			    $row = mysqli_fetch_row($r); 
                echo $row[1];
				
		 
		  
		echo'  </a></li>
		</ol>
		
		
        <div class="col-lg-12" style="background:#fad390; margin:5px;"  >
			<div class="category" style="margin:10px;">
			    <div class="row">
					<div class="col-lg-12" style="background:#ffc048;" id="title"><h1>'.$row[1].'</h1></div>
					<div class="col-lg-12" style="padding:1px;">
							<img src="'.$row[7].'" class="img-responsive" style="width: 100%;height:100%;"/>
					</div>
					<br>
					<div class="col-lg-12" style=" margin-bottom:5px; padding:5px; background:#ffc048;"> 
						<a class="pull-left"> <i class="fa fa-clock-o"></i> '.$row[4].'</a>
						<p class="pull-right" ><i class="fa fa-pencil"></i> '.$row[3].' </p>
					</div>
					<hr/>
					<div class="col-lg-12" style="padding:10px;">
						'.$row[2].'
					</div>
					<br>
				</div>
			</div>
		 </div>		
		 <br><br><br><br>';
		 ?>
		<!---- comments Area----->
		<?php 
		   if(! empty($_SESSION))
		   {
			   include_once("Comments_Area.php");
		   }
		
		?>
		
</article>

</div>
</div>
<script src="../js/AddComment.js"></script>
<?php
	include_once("Footer.php");
?>