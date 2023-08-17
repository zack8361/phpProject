<?php

// 배열에 아이템 추가화 획득.
$paper[0] = "kong";
$paper[1] = "Lee";
$paper[2] = "Hi";
print_r($paper);

echo "<br>";
$len = count($paper);


// 배열 출력하기
for($i = 0; $i<$len; $i ++){
    echo "<h1>$paper[$i]</h1>";
}

// 배열 foreach 로 출력하기
foreach ($paper as $value){
    echo "<h1>$value </h1>";
}