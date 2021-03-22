<?php 
    $conn=mysqli_connect('localhost','root','','cms');
    $limit = 5;  
    $page=$_POST['page']; 
    
    if(empty($page)){$page=1;}

    $start_from = ($page-1) * $limit;  
    $quary_String='select * from  `cms`.`posts` LIMIT '.$start_from.','.$limit; 
    $rs_result = mysqli_query($conn, $quary_String);
    $num=$start_from+1;
    
     while( $row = mysqli_fetch_row($rs_result)) 
     {
        echo '<tr>'; 
        echo '<td>'.$num.'</td>';
        $path=$row[7];
        if($path=='')
        {
           $path='../images/file.png';
        }
        echo '<td><img src="'.$path.'"   width="50px";/></td>';
        echo '<td>'.$row[1].'</td>'; 
        echo '<td>'.$row[3].'</td>'; 
        echo '<td>'.$row[4].'</td>';                  
        echo '<td><button type="button" class="btn btn-Primary" ="../include/Post.php?post='.$row[0].'">مشاهدة المقال </button></td>';
        echo '<td><button type="button" class="btn btn-Primary">تعطيل</button></td>';
        echo '<td><button type="button" class="btn btn-warning"><span class="fa fa-edit"></span></button></td>';
        echo '<td><button type="button" class="btn btn-danger"><span class="fa fa-trash-o"></span></button></td>';
        echo '<tr>';
        $num++;
     }
?>  


