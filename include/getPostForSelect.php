<?php
      $conn=mysqli_connect('localhost','root','','cms');  
      $Category=$_POST['Category'];
      $Cat=$_POST['cat'];
      $Num=$_POST['Num']; 
      
      echo' <div class="well well-sm">';  
      $Count=1;
      while ($Count <= $Num)
      {
          echo ' 
              
               <div class="form-group">
               <div class="row">
                   <label class="control-label  col-sm-3" for="C'.$Cat.'_P'.$Count.'"> المقالة رقم '.$Count.'  </label>
                   <div class="col-sm-9">
                       <select  style="width:50%;" id="C'.$Cat.'_P'.$Count.'">
                           <option  class="form-control" value=-1>اختر المقالة  </option>  ';
                        ?> 
                         <?php 
                            $quary_String='select * from  `cms`.`posts` where Category_id='.$Category; 
                            $rs_result = mysqli_query($conn, $quary_String); 
                            while( $row = mysqli_fetch_row($rs_result)) 
                            {
                                  echo' <option  class="form-control" value='.$row[0].'>'.$row[1].'  </option>  ';
                            }
                         ?>
                         <?php
                   echo'    </select>
                   </div>
           </div>
           </div>  		
               
            ';
        
          
          $Count++;
      }  
      
      echo' </div>';   
?>