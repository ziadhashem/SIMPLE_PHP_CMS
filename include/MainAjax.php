<?php 
    $ok1=0;
    $file='../js/posts.json';
    $posts1=array();
    if(isset($_POST['Num1']))
    {
        $num1=$_POST['Num1'];
        $count=1;  $ok1=0;
        while ($count <= $num1) 
        {
            $post=$_POST['C1_P'.$count];
            if($post>0){$ok1=1;}
            $posts1[] = $post;
            $count++;
        }
       
    }
   
    //////////////////////////////////////////////////////
    //////////////////////////////////////////////////////
    $ok2=0;
    $posts2=array();
    if(isset($_POST['Num2']))
    {
        $num2=$_POST['Num2'];
        $count=1; 
        while ($count <= $num2) 
        {
            $post= $_POST['C2_P'.$count];
            if($post>0){$ok2=1;}
            $posts2[] = $post;
            $count++;
        }

    }
    ///////////////////////////////////////////////////
    //////////////////////////////////////////////////
    $ok3=0;
    $posts3=array();
    if(isset($_POST['Num3']))
    {
        $num3=$_POST['Num3'];
        $count=1;  
        while ($count <= $num3) 
        {
            $post= $_POST['C3_P'.$count];
            if($post>0){$ok3=1;}
            $posts3[] = $post;
        
            $count++;
        }
       

    }
    ///////////////////////////////////////////////////
    //////////////////////////////////////////////////
     
    class category
    {
        public  $name;
        public  $posts=array();
     
        
         /* Member functions */
        function setname($par){
            $this->name = $par;
        }
        
       
        function __construct( $n, $p )
         {
            $this->setname($n);
            global $posts;
            for ($i=0; $i < Count($p); $i++)
            { 
             $this->$posts=array($i=>$p[$i]);
            }
         
         }


    }

  
    ///////////////////////////////////////////////
    ///////////////////////////////////////////////

    $posts=array();    $ok=1;
  
   
     if($ok1==1){ $posts[]= array(1=>$posts1);} 
     if($ok2==1){ $posts[] =array(2=>$posts2);} 
     if($ok3==1){ $posts[] =array(3=>$posts3);}  
    
    



     if(!file_put_contents($file,json_encode( $posts)))
     {
            echo "error";
            $ok=0;
     }
    



    /////////////////////////////////////////////////
    if($ok==1)
      echo 'تم التحديث بنجاح';
    
?>