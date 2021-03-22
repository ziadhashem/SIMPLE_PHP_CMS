<?php
     
	 $username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 $gender=$_POST['gender'];
	 
     $quary_String="select * from users  where email='$email'";
	 $conn=mysqli_connect('localhost','root','','cms');
	 $r= mysqli_query($conn,$quary_String);
	 
	 

	  if (mysqli_num_rows($r)==0)
	  {
		$date=date("Y/m/d   H:i:s");
		$quary_String="insert into users (username, gender, email, phone,password,register_date)VALUES ('$username','$gender','$email','$phone','$password','$date')" ;		
		
		$conn=mysqli_connect('localhost','root','','cms');
		$result= mysqli_query($conn,$quary_String);
		if($result)
		{
		  
		   session_start();
		   $_SESSION["email"]=$_POST['email'];
		   $_SESSION["username"]=$_POST['username'];
		   $_SESSION["gender"]=$_POST['gender'];
		   $_SESSION["avatar"]=null;
          
		}
		else
		{
			echo'تم فشل عمليةالتسجيل';
		}
 
	  }
	 else
	 {
		echo'البريد الالكتروني موجود مسبقا';
	 }
	
	 	 		
								
				
	
 ?>



