<?php


// 배열 판별 함수 : is_array($arr);
$arr = [1,2];
echo (is_array($arr)) ? "배열입니다" : "배열이 아닙니다.";
echo "<br>";


// 배열 정렬 -> 내림 차순 정렬.
$arr1 = [10,9,8,7,6,5,4,3,2,1];
sort($arr1);
echo "<br>";
foreach($arr1 as $value) {
    echo $value . ' ';
}

// explode();

