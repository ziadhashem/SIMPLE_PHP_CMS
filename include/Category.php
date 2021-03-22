<?php
    include_once("header.php");
    include_once("Nav_And_Logo.php");
	include_once("Aside.php");
?>

<article class="col-md-9 col-lg-9 art_bg" style="margin-top: 8px; margin-bottom:30%; background:#bdc3c7;">
          
        <ol class="breadcrumb" style="margin:5px;">
		   <li><a href="index.php">الرئيسية</a></li>
	       <li><a href="Categories.php">التصنيفات</a></li>
		   <li><a href="#">
			  <?php
			        $id=$_GET['Category'];
					$quary_String="select * from `cms`.`categories` where Category_id=".$id;
					$conn=mysqli_connect('localhost','root','','cms');
					$r= mysqli_query($conn,$quary_String);
					while( $row = mysqli_fetch_row($r)) 
					{
                         echo $row[1];
					}
			  ?>
		   </a></li>
		</ol>	

		<?php 

			$id=$_GET['Category'];
			$quary_String="select * from `cms`.`Posts` where Category_id=".$id;
			$conn=mysqli_connect('localhost','root','','cms');
			$r= mysqli_query($conn,$quary_String);
			while( $row = mysqli_fetch_row($r)) 
			{
			echo '
					<div class="col-lg-12" style="background:#fad390; margin:5px;" >
					<div class="category" style="margin:10px;">
						<div class="row">
							<div class="col-md-3">
								<img src="'.$row[7].'" class="img-responsive"/>
							</div>
							<div class="col-md-9">
								<div class="content">
									<h3>'.$row[1].'</h3>';
								$string = strip_tags($row[2]);
								if (strlen($string) > 500) {

									// truncate string
									$stringCut = substr($string, 0, 500);
									$endPoint = strrpos($stringCut, ' ');

									//if the string doesn't contain any space then it will cut without word basis.
									$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
									$string .= '...';
								}
								echo $string;
		?>
		<?php

                    				echo'	<hr/>
									<div> 
										<a class="btn btn-primary pull-left" href="../include/Post.php?Post='.$row[0].'">إقرأ المزيد </a>
										<p class="pull-right" ><i class="fa fa-pencil"></i>'.$row[3].'  |  <i class="fa fa-clock-o"></i> '.$row[4].' </p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					</div>';
		   }

        ?>		
</article>
</div>
</div>
<?php
	include_once("Footer.php");
?>