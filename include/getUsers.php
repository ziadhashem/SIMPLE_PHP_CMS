
<?php 
    $conn=mysqli_connect('localhost','root','','cms');
    $limit = 5;  
    $page=$_POST['page']; 
    
    if(empty($page)){$page=1;}

    $start_from = ($page-1) * $limit;  
    $quary_String='select * from `cms`.`users` LIMIT '.$start_from.','.$limit; 
    $rs_result = mysqli_query($conn, $quary_String);
    $num=$start_from+1;
    
     while( $row = mysqli_fetch_row($rs_result)) 
     {
           echo '<tr>'; 
           echo '<td>'.$num.'</td>';
           echo '<td>'.$row[1].'</td>';
           echo '<td>'.$row[6].'</td>';
           echo '<td>'.$row[5].'</td>';
           echo '<td>'.$row[7].'</td>';
           echo '<td><img src='.$row[4].'  width=50px; /></td>';
           echo '<td>'.$row[2].'</td>';
           echo '<td>Admin</td>';
           echo '<td><button type="button" class="btn btn-Primary"><span class="fa fa-edit"></span></button></td>';
           echo '<td><button type="button" class="btn btn-warning"><span class="fa fa-trash-o"></span></button></td>';
           echo '<tr>';
           $num++;
     }
?>  


