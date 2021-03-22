<!-- body -->
<section class="container-fluid" style="margin-top: 20px;">

<?php
    include_once("Aside.php");
?>
		
		
		<article class="col-md-9 col-lg-9 art_bg">
		<!-- start carousel -->
		
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 30px;">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
	  <?php
	      ///////////////////////////////////////////////////////////
	      $file='../js/posts.json';
		 // Get the contents of the JSON file 
		  $strJsonFileContents = file_get_contents($file,FILE_USE_INCLUDE_PATH);
	     // Convert to array 
		 $array = json_decode($strJsonFileContents, true);
		 $conn=mysqli_connect('localhost','root','','cms');
		 $cat1=array();
		 foreach ($array as $key => $value)
		 {
			if($key=="1")
			{
						$cat1=$value;   
						foreach ($cat1 as $key => $value)
					  {
							print_r( $value);
						}
			}

		 }
		 
            
			 // $count=0; 
			 // echo Count($jsonrow['1']);
			 // while ($count < Count($jsonrow['1'])) 
			 // {
				// $quary_String='select * from posts where Post_id='.$jsonrow['1'][$count]; 
				// $rs_result = mysqli_query($conn, $quary_String);
				// $row = mysqli_fetch_row($rs_result);
				// echo   '
				// 	<div class="item">
				// 		<img src="'.$row[7].'">
				// 			<div class="carousel-caption">
				// 				<h3>'.$row[1].'</h3>
				// 			</div>
				// 	</div><!-- End Item -->
				
				//       ';
				// $count++;
			 // }
          
      ?>  
		
	   
		 
      </div><!-- End Carousel Inner -->

	<!-- Left and right controls -->
	 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>


    </div>
	<!-- End Carousel -->
	
	<hr />
	
	<!-- category A -->
	<div class="row">
	<h2 class="tit_cat1">القسم الثاني</h2>
	
<?php 
   
   ///////////////////////////////////////////////////////////
   $file='../js/posts.json';
  // Get the contents of the JSON file 
   $strJsonFileContents = file_get_contents($file,FILE_USE_INCLUDE_PATH);
  // Convert to array 
  $array = json_decode($strJsonFileContents, true);
  $conn=mysqli_connect('localhost','root','','cms');

 
 
  foreach($array as $jsonrow)  
  {  
	  $count=0; 
	  while ($count < 3)
	  {
		 $quary_String='select * from posts'; 
		 $rs_result = mysqli_query($conn, $quary_String);
		 $row = mysqli_fetch_row($rs_result);
		 $string = strip_tags($row[2]);
		 if (strlen($string) > 500) {
		   // truncate string
			$stringCut = substr($string, 0, 500);
	        $endPoint = strrpos($stringCut, ' ');
			//if the string doesn't contain any space then it will cut without word basis.
			$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
			$string .= '...';
		}
		echo '
				<div class="col-sm-4 col-md-4" style="margin-bottom: 20px">
					<div class="post">
						<div class="post-img-content">
							<img src="'.$row[7].'" class="img-responsive" style="width: 100%;height: 200px;"/>
							<span class="post-title"><b>'.$row[1].'</b>
						</div>
						<div class="content">
							<div class="author">
								بواسطة <a href="#"><b>'.$row[3].'</b></a> |
								بتاريخ <time datetime="'.$row[4].'</time>
							</div>
							<div class="text-justify">
							'.$string.'
							</div>
							<hr />
							<div class="text-left">
								<a href="#" class="btn btn-warning btn-sm">اقرأ المزيد &larr;</a>
							</div>
						</div>
					</div>
				</div>

';
		 $count++;
	  }
  }  

     
?>  


<hr />
	<!-- end category A -->
	
			<!-- start category B -->
			<div class="col-lg-12">
			<h2 class="tit_cat2">القسم الثالث</h2>
			<div class="row  bg_cat2">
				<?php 
					$conn=mysqli_connect('localhost','root','','cms');
					
					$quary_String='select * from posts'; 
					$rs_result = mysqli_query($conn, $quary_String);
				
					while( $row = mysqli_fetch_row($rs_result)) 
					{
						echo '
								
								<div class="bg_tab_topic col-md-6">
									<div class="col-md-4">
										<img src="'.$row[7].'" width="100%" class="circle" />
									</div>
									<div class="col-md-8">
										<h3 class="col-md-12 text-justify" style="margin-right: -30px;margin-top: 8px;">
											<a href="#">'.$row[1].'</a>
										</h3>
									</div>
									<div class="clearfix"></div>
								</div>
				
						';


					}
				
				
				?>
						</div>
						</div>
		</article>
</section>
<!-- end body -->
