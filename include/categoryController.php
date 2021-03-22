<?php  
    include_once("header.php");
	include_once("Nav_And_Logo.php");
?>

<script>
  
$(document).ready(function(){
    getPage(1);
    $("#M").hide();
    $("#img_load1").hide();
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
  $('#submitCat').click(function(){
     
      var cat=$("#cat").val();
      var dataString='name='+cat;
      if(cat==="" || cat==null)
      {         
        $("#M").show();
        $("#M").html('أدخل اسم التصنيف أولا');      
        window.setTimeout(function(){
             $("#M").hide();
             $("#cat").val('');
         },600);
         clearTimeout();
      }
      else
      {
        $.ajax({
				type:"post",                                                                       
				url :"insert_Cat.php",
				data: dataString,
				cache:false,
				beforeSend: function(  ) {
					$("#img_load1").show();
				  },
				success:function(result)
				{
                    
                    $("#img_load1").hide();     
                    $("#M").show();
                    $("#M").html(result);               
                    window.setTimeout(function(){
                        $("#M").hide();
                        $("#cat").val('');
                    },1300);
                    clearTimeout();
                   
                }
            });  
      }
      
  });

  //---------------------------
 
});
//---------------------------
    function getPage(id)
    {
        var dataString='page='+id;
        $.ajax({
				type:"post",                                                                       
				url :"getCategories.php",
				data: dataString,
				cache:false,

				success:function(result)
				{                  
                    $("#CategoryTable").show();
                    $("#CategoryTable").html(result);
                }
            });  
           
    }
</script>

<div class="container-fluid ">
<div class="row">
		   <div class="col-sm-3">
			    <?php include_once("GroupList.php");?>
			</div>
			<div class="col-sm-6" >
                <ol class="breadcrumb " style="margin:5px; padding:10px;">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="ControlPanel.php">لوحة التحكم</a></li>
                    <li><a href="#">   التصنيفات </a></li>
                </ol>
               
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
                <br>
               <!----------------table-------------------->
                <div class="panel panel-primary ">
                
                    <div class="panel-heading"> <span class="glyphicon glyphicon-th-list"></span>  </div>   
                        <div class="table-responsive">          
                            <table class="table ">
                                <thead>
                                <tr>               
                                    <th>#</th>
                                    <th>اسم التصنيف </th>
                                    <th>تعديل </th>
                                    <th>حذف </th>                        
                                </tr>
                                </thead>
                                <tbody id="CategoryTable">
                                    
                                </tbody>
                            </table>
                        </div>
                </div>
               <!------------- End table  ---------------->
   
            <ul class="pagination " style="margin-right:30%;">
                <?php
                        $quary_String="select  COUNT(Category_id) from  `cms`.`Categories`";
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
                            echo '<li onclick="getPage('.$count.')" id="'.$count.'"><a>'.$count.'</a></li>';
                            $count++;
                            }
                        }
                       
                ?>  
                    
                </ul>
    <!------------------------------------->

						
			</div>
            <div class="col-sm-3" style="margin-bottom:20%; padding:2px;">
                <div class="panel panel-primary ">
                   <div class="panel-heading"> <span class="glyphicon glyphicon-pencil"style="font-size=40px;"></span>    إضافة تصنيف جديد </div>
                   <div class="panel-body">
                           <br>
							<div class="form-group ">
                                <label class="control-label col-sm-4 text-center " for="cat"> اسم التصنيف </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" required  id="cat" name="cat" placeholder="أدخل اسم التصنيف ">
                                </div>
							</div> 
                            <br>
                            <br>
                            <div class="form-group "> 
								<div class="col-sm-offset-4 col-sm-8">
									<button type="submit" name="submitCat"  id="submitCat"  class="btn btn-primary" style="width:100%;">إضافة  </button>
								</div>
							</div>	
                            <br>
                            <div class="form-group "> 
									<div class="col-sm-offset-4 col-sm-8">
									<div class="text-center" id="img_load1" > 	<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> </div>
									</div>
								</div>	
                            <br>
                            <div class="alert alert-info text-center" id="M">  </div>
                            <br>
                   </div>
                </div>
            </div>
</div>
</div>
<?php
     include_once("Footer.php");
?>