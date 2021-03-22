<?php   
     $name=$_POST['name'];
     
	 $quary_String="insert into  `cms`.`Categories` (name)VALUES ('$name')";		
		
		$conn=mysqli_connect('localhost','root','','cms');
		$result= mysqli_query($conn,$quary_String);
		if($result===true)
		{
		  echo 'تم الإضافة بنجاح ';
		}
		else
		{
			echo'حدث خطأ أثناء إضافة الصنف ';
		}	
 ?>



