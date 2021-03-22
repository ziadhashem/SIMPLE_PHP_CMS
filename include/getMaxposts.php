<?php

       $Cat =$_POST['cat'];
       $quary_String="select * from `cms`.`Posts` where Category_id=".$Cat;
       $conn=mysqli_connect('localhost','root','','cms');
       $r= mysqli_query($conn,$quary_String);
       echo mysqli_num_rows($r);
       

?>