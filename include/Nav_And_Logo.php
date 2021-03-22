<?php

$quary_String='select * from `cms`.`config` '; 
$rs_result = mysqli_query($conn, $quary_String);  
$row = mysqli_fetch_row($rs_result);
$LOGO=$row[10];
$name=$row[1];
if($LOGO==''){$LOGO='../images/logo.png';}
if($name==''){$name='اسم الموقع';  }
echo'
<!-- logo site -->
<section id="logo">
	<img src="'.$LOGO.'" width="250px" />
</section>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">'.$name.'</a>
    </div>
    ';
?>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><i class="fa fa-home" style="font-size:15px;"></i>
         الرئيسية <span class="sr-only">(current)</span></a></li>
        <li><a href="Categories.php"><span class="glyphicon glyphicon-th-list"style="font-size:15px;"> التصنيفات</a></li>
        <li><a href="about.php"><i class="fa fa-info-circle" style="font-size:15px;"></i> حول الموقع</a></li>
      </ul>
      <?php 
        if(! empty($_SESSION))
				{
             echo'
             <ul class="nav navbar-nav navbar-left">
             <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" style="font-size:15px;"></i> الإعدادات <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="#">الصفحة الشخصية</a></li>
                 <li role="separator" class="divider"></li>
                 <li><a href="logout.php">تسجيل الخروج</a></li>
               </ul>
             </li>
           </ul>
             ';
        }
             
      ?>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- end logo site -->
