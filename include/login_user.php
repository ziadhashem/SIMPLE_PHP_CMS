<?php
      
	 $password=md5($_POST['password']);
	 $email=$_POST['email'];
   $MsgError='';
    

	 $quary_String="select * from users  where email='$email' and  password='$password'";		
	 
	 $conn=mysqli_connect('localhost','root','','cms');
    $r= mysqli_query($conn,$quary_String);
    
      
     if (mysqli_num_rows($r)==0)
     {
       echo 'كلمة السر أو البريد الالكتروني غير صحيح';
      
     } 
     else 
     {
        session_start();
        $row=mysqli_fetch_row($r); 

         $_SESSION["user_id"]=$row[0];
         $_SESSION["email"]=$row[2];
         $_SESSION["username"]=$row[1];
         $_SESSION["gender"]=$row[6];
         $_SESSION["avatar"]=$row[4];
		  
     }
		
		

			
	
 ?>