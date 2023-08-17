<?php

// Parameter 를 가지고 있는 기본 함수 호출

echo "호프집에 오신것을 환영합니다";
echo "<br>";

function isAdult($age){
    if($age > 20){
        return true;
    }
    else{
        return false;
    }
}

$age = 12;
if(isAdult($age)){
    echo "입장 가능합니다.";
}
else{
    echo "입장 불가" . "청소년 입니다.";
}

echo "<hr>";

function fixName($name1, $name2, $name3){
    $name1 = strtolower($name1);
    $name2 = strtolower($name2);
    $name3 = strtoupper($name3);
    
    return $name2 . ' ' . $name2 . ' ' . $name3;  
}

echo fixName("Lee Chan Ho", "Lee Kong", "KKKKKK");

?>