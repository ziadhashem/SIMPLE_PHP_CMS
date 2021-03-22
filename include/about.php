 <?php
    include_once("header.php");
    include_once("Nav_And_Logo.php");
   	include_once("Aside.php");
?>
	<ol class="breadcrumb col-md-8" style="margin:5px; padding:5px;">
		<li><a href="index.php">الرئيسية</a></li>
		<li><a href="about.php">حول الموقع </a></li>
	</ol>
<?php

$quary_String='select * from `cms`.`config` '; 
$rs_result = mysqli_query($conn, $quary_String);  
$row = mysqli_fetch_row($rs_result);

echo '
<article class="col-md-9 col-lg-9 art_bg"  style="background:#bdc3c7; margin-top: 8px; margin-bottom: 30px;">
        <br><br>
        <label class="control-label " for="descrption">من نحنا :'.$row[2].'</label>
        <br><br>
        <hr>
        <br><br>
        <label class="control-label " for="Email"> البريد الإلكتروني : '.$row[3].' </label>
        <br><br>
        <label class="control-label " for="Phone"> هاتف : '.$row[8].' </label>
        <br><br>
        <label class="control-label " for="info"> معلومات إضافية :  '.$row[9].'</label>
        <br><br>
        ';
?>
</article>
<br><br><br>
</div>
</div>
<?php
	include_once("Footer.php");
?>
