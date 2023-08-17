<?php


$strKong = "hello my name is kong";

echo $strKong;
echo "<br>";


// PHP 내장 함수 -> 문자열 뒤집기(strrev);
echo strrev($strKong);

// str_repeat -> 문자열 반복 호출 :str_repeat;
echo "<br>";
echo str_repeat($strKong, 2);


// 문자열 영문자 -> 대문자로 변경 : strtoupper

echo "<br>";
echo strtoupper($strKong);

echo "<h1> 경계선 </h1>";
echo "<hr>";


// String 의 첫글자만 대문자로 변환하기 ucfirst($String);
$answer = "";
$arr = explode(" ", $strKong);

foreach ($arr as $value){
    $answer .= ucfirst($value). ' ';
}

echo $answer;



?>