<?php   
     $title=$_POST['postName'];
     $Category=$_POST['Category'];
     $Status=$_POST['PostStatus'];
     $Content=$_POST['postContent'];
     session_start();
     $Author= $_SESSION['username'];
     $date=date('m/d/Y h:i:s a', time());
     $uploadDirectory = '../images/PostsImages/';
     $fileName = $_FILES['PostImage']['name'];
     define ('realPath', realpath($uploadDirectory));
     $Path='';
     if(isset($_FILES['PostImage']['name']))
     {
        
        $Path= realPath .'/'. basename($fileName);; 
     }

      $PathRead=$uploadDirectory.basename($fileName);

       $quary_String="insert into  `cms`.`Posts` (Title,Content,Author,Date,Category_id,Status,Image)VALUES('$title','$Content','$Author','$date','$Category','$Status','$PathRead')";		
      
       $conn=mysqli_connect('localhost','root','','cms');
       $result= mysqli_query($conn,$quary_String);
       if($result==true)
       {
         move_uploaded_file( $_FILES['PostImage']['tmp_name'],$Path);
         echo 'تم الإضافة بنجاح ';
       }
       else
       {
           echo' حدث خطأ أثناء الإضافة ';
       }
 ?>



