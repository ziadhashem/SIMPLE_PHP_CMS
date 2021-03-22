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
		   	  <ol class="breadcrumb col-md-10 " style="margin:5px; padding:10px;">
					<li><a href="index.php">الرئيسية</a></li>
                    <li><a href="ControlPanel.php">لوحة التحكم</a></li>
					<li><a href="PostController.php">المقالات</a></li>
              </ol>
			  <br>
			  <br><br>
				<!---------------------------------------------->	
                  <!----------------table-------------------->
                <div class="panel panel-primary " >
                
                <div class="panel-heading"> <span class="fa fa-users"></span>  </div>

                <div class="table-responsive">          
                    <table class="table ">
                        <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>صورة المقال  </th>
                            <th>عنوان المقال </th>
                            <th>الكاتب</th>
                            <th> تاريخ النشر </th> 
                            <th>مشاهدة </th> 
                            <th>الحالة </th>
                            <th>تعديل </th>
                            <th>حذف </th> 
                            
                                    
                        </tr>
                        </thead>
                        <tbody id="myTable">
                       
                        </tbody>
                    </table>
                </div>
            </div>
            <!------------- End table  ---------------->
            <ul class="pagination " style="margin-right:30%;">
                <?php
                        $quary_String="select  COUNT(Post_id) from  `cms`.`Posts`";
                        $conn=mysqli_connect('localhost','root','','cms');
                        $limit = 5; 
                        $rs_result = mysqli_query($conn, $quary_String);  
                        $row = mysqli_fetch_row($rs_result);  
                        $total_records = $row[0];  
                        $total_pages = ceil($total_records / $limit); 
                        $count=1;
                        if($total_pages>1)
                        {
                            while ($count <= $total_pages) 
                            {
                            echo '<li onclick="getPosts('.$count.')" id="'.$count.'"><a>'.$count.'</a></li>';
                            $count++;
                            }
                        }
                       
                ?>  
                    
                </ul>

                <!---------------------------------------------->		
		</div>
</div>
</div>
<script src="../js/getPosts.js"></script>
<?php
     include_once("Footer.php");
?>
