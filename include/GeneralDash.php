
<!------------------------>
<div style="margin-top:20px; ">
    <div class="row">
       
        
        <div class="col-sm-4">
            <div class="jumbotron text-center" style="background:#74b9ff;">
            
            <i class="fa fa-th-list " style="font-size:60px;color:#0984e3; ">
           
               
            <?php
                
                $quary_String="select * from `cms`.`categories`";
                $conn=mysqli_connect('localhost','root','','cms');
                $r= mysqli_query($conn,$quary_String);
                echo mysqli_num_rows($r);
            ?>
            تصنيف
            </i>        
            </div>
        </div>
        <div class="col-sm-4">
        
         <div class="jumbotron text-center"  style="background:#fdcb6e;">
            <i class="fa fa-users " style="font-size:60px;color:red; ">
            
            <?php
                
                $quary_String="select * from `cms`.`users`";
                $conn=mysqli_connect('localhost','root','','cms');
                $r= mysqli_query($conn,$quary_String);
                echo mysqli_num_rows($r);
            ?>
           عضو
            
               </i>
              
          
         </div>

            
        </div>
        <div class="col-sm-4">
            <div class="jumbotron text-center" style="background:#d63031;">
            <i class="fa fa-files-o " style="font-size:60px;color:#fdcb6e; ">
            <?php
                
                $quary_String="select * from `cms`.`Posts`";
                $conn=mysqli_connect('localhost','root','','cms');
                $r= mysqli_query($conn,$quary_String);
                echo mysqli_num_rows($r);
            ?>
              مقال
            </i>
            
            </div>
        </div>
        
        
    </div>
</div> 
