
<?php
    include_once("header.php");
    include_once("Nav_And_Logo.php");
   	include_once("Aside.php");
?>
<ol class="breadcrumb col-md-8" style="margin:5px; padding:5px;">
	<li><a href="index.php">الرئيسية</a></li>
	<li><a href="Categories.php">التصنيفات</a></li>
</ol>

<article class="col-md-9 col-lg-9 art_bg"  style="background:#bdc3c7; margin-top: 8px; margin-bottom: 30%;">
    <div style="margin-top:20px; ">
        
    <?php
                    
        $quary_String="select * from `cms`.`categories`";
        $conn=mysqli_connect('localhost','root','','cms');
        $r= mysqli_query($conn,$quary_String);
        while( $row = mysqli_fetch_row($r)) 
        {
            echo '<a href="./Category.php?Category='.$row[0].'"><div class="col-sm-4">
                    <div class="jumbotron text-center" style="background:#74b9ff;">                    
                        <i class="fa fa-th-list " style="font-size:1.5em;color:#0984e3; ">
                        '.$row[1].'
                        </i>        
                    </div>
                </div></a>';
        }

     ?>
        
        
    </div>
</article>  
</div>
</div>
<?php
   	include_once("Footer.php");
?>