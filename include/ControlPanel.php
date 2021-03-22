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
						<li><a href="#"> إحصائيات </a></li>
          </ol>
					<br>
					<br>
				<?php
					include_once("GeneralDash.php");
				?>			
			</div>
</div>
</div>
<?php
     include_once("Footer.php");
?>
