<?php 

    $fruits = array("사과", "배", "귤", "수박");
    
    
    foreach ($fruits as $key => $values){
        echo "<h1> $key = $values </h1>";
    }
    sort($fruits);
    
    echo "<hr>";
    
    foreach($fruits as $key => $values){
        echo "<h1> $key = $values </h1>";
    }
    
   /**
    * 값에 따른 오름 차순  = asort();
    * 키에 따라 오름 차순 정렬 = ksort();
    * 값에 따라 내림차순 정렬 = arsort();
    * 키에 따라 내림차순 정렬 = krsort();
    */
    

?>