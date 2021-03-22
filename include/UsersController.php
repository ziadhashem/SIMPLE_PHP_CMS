

<?php  
    include_once("header.php");
	include_once("Nav_And_Logo.php");
?>

<script>
$(document).ready(function(){
  getUsers(1);
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  //---------------------------
 
});
 function getUsers(id)
 {
    var dataString='page='+id;
        $.ajax({
				type:"post",                                                                       
				url :"getUsers.php",
				data: dataString,
				cache:false,
				success:function(result)
				{                  
                    $("#UsersTable").show();
                    $("#UsersTable").html(result);
                }
            });  
           
 }

</script>


<div class="container-fluid ">
<div class="row">
		   <div class="col-sm-3">
						<?php include_once("GroupList.php");?>
			</div>
			<div class="col-sm-9" >
                <ol class="breadcrumb " style="margin:10px; padding:10px;">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="ControlPanel.php">لوحة التحكم</a></li>
                    <li><a href="UsersController.php"> إدراة المستخدمين  </a></li>
                </ol>
                
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
               <!----------------table-------------------->
    <div class="panel panel-primary ">
    
    <div class="panel-heading"> <span class="fa fa-users"></span>  </div>

    <div class="table-responsive">          
        <table class="table ">
            <thead>
            <tr>
                
                <th>#</th>
                <th>اسم المستخدم </th>
                <th>الجنس</th>
                <th>هاتف</th>
                <th> تاريخ التسجيل</th> 
                <th>الصورة الشخصية</th> 
                <th>البريد الالكتروني</th>
                <th>الصفة </th>
                <th>تعديل </th>
                <th>حذف </th> 
                
                        
            </tr>
            </thead>
            <tbody id="UsersTable">
            
            </tbody>
        </table>
        </div>
        </div>
<!------------- End table  ---------------->
        <ul class="pagination " style="margin-right:30%;">
                <?php

                        $quary_String="select  COUNT(User_id) from  `cms`.`Users`";
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
                            echo '<li onclick="getUsers('.$count.')" id="'.$count.'"><a>'.$count.'</a></li>';
                            $count++;
                            }
                        }
                       
                ?>  
                    
                </ul>
    

   

						
	</div>
</div>
</div>
<?php
     include_once("Footer.php");
?>