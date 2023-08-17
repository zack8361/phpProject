<?php

//$_SERVER 에 대해서 알아보자

print_r($_SERVER['PHP_SELF']);
echo "<br>";

// 현재 사용하고 있는 브라우저 정보.
$ag = $_SERVER['HTTP_USER_AGENT'];

if(strpos($ag,'Chrome')){
    echo "크롬 유저입니다";
}
else{
    echo "크롬 유저가아니에요";
}

echo "<br>";

// 방문한 사람의 ip 정보 확인

print_r ($_SERVER['REMOTE_ADDR']);


?>