<?php   
     $Comment=$_POST['Comment'];
     session_start();
     $user_id= $_SESSION["user_id"];
     $username=$_SESSION["username"];
     $date=date('m/d/Y h:i:s a', time());
     $Post=$_POST['post'];
         
       $quary_String="insert into  `cms`.`comments` (user_id,content,date,post_id)VALUES('$user_id','$Comment','$date','$Post')";		
      
       $conn=mysqli_connect('localhost','root','','cms');
       $result= mysqli_query($conn,$quary_String);
       if($result==true)
       {
        
        $quary_String="select Avatar FROM  `users` INNER JOIN Comments ON users.user_id = comments.User_id
        where users.user_id='$user_id'";		    
        $r= mysqli_query($conn,$quary_String);
        $row = mysqli_fetch_row($r); 
         
         echo '<div class="col-lg-12" style="background:#d2dae2; margin:5px;" >
         <div class="category" style="margin:10px;">
             
                 <div class="col-md-2">
                    <img src="'.$row[0].'" class="img-responsive" width="50px";/>
                 </div>
                 <div class="col-md-10">
                     <div class="content">
                          '.$Comment.'
                         <hr/>
                         <div> 
                            <div class="col-sm-4">
                                <p class="pull-right"><i class="fa fa-pencil"></i>  تم التعليق بواسطة  ' .$username.' </p>
                            </div>
                            <div class="col-sm-4">
                                <a href="#" ><span class="fa fa-trash-o"></span></a>
                            </div>
                            <div class="col-sm-4">
                                <p class="pull-left" ><i class="fa fa-clock-o"></i>  '.$date.' </p>
                            </div>
                         </div>
                         
                     </div>
                 </div>
             
         
         </div>		
      </div> ';
       }
       else
       {
           echo' حدث خطأ أثناء الإضافة ';
       }
 ?>


