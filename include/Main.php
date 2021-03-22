<?php

class Main {
    /* Member variables */
    var $category1=array();
    var $category2=array();
    var $category3=array();
    /* Member functions */
    function setCategory1($par){
        $this->$category1= $par;
     }
     
     function getCategory1(){
        echo $this->$category1 ."<br/>";
     } 
     function setCategory2($par){
        $this->$category2= $par;
     }
     
     function getCategory2(){
        echo $this->$category2 ."<br/>";
     } 
     function setCategory3($par){
        $this->$category3= $par;
     }
     
     function getCategory3(){
        echo $this->$category3 ."<br/>";
     } 

 }


?>