        <?php
    $sitename=$_POST['sitename'];
    $discription=$_POST['discription'];
    $email=$_POST['email'];
    $facebook=$_POST['facebook'];
    $youtube=$_POST['youtube'];
    $twitter=$_POST['twitter'];
    $telegram=$_POST['telegram'];
    $phone=$_POST['phone'];
    $more_info=$_POST['more_info'];
    $uploadDirectory = '../images/';
   
    $fileName = '';
     define ('realPath', realpath($uploadDirectory));
     $Path=$PathRead='';
     if(isset($_FILES['logo1']['name']))
     {
        $fileName = $_FILES['logo1']['name'];
        $Path= realPath .'/'. basename($fileName);
        $PathRead=$uploadDirectory.basename($fileName);
     }

      $quary_String="delete from `cms`.`config`";
      $conn=mysqli_connect('localhost','root','','cms');
      $result= mysqli_query($conn,$quary_String);
      if($result)
      {
        $quary_String="insert into  `cms`.`Config` 
        (sitename,discription,email,facebook,youtube,twitter,telegram,phone,more_info,logo)
        VALUES(
            '$sitename',
            '$discription',
            '$email',
            '$facebook',
            '$youtube',
            '$twitter',    
            '$telegram',
            '$phone',
            '$more_info',
            '$PathRead')";		
       
        $conn=mysqli_connect('localhost','root','','cms');
        $result= mysqli_query($conn,$quary_String);
        if($result==true)
        {
          if(isset($_FILES['logo1']['name']))
          {
              move_uploaded_file( $_FILES['logo1']['tmp_name'],$Path);
          }
  
          echo 'تم الإضافة بنجاح ';
        }
        else
        {
            echo' حدث خطأ أثناء الإضافة ';
        }
      
  
      }
     
?>