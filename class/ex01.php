<?php
/*
 *함수의 존재 여부 체크. 
 */

function kong(){
    echo "여기는 kong 함수 입니다";
}


if(function_exists("kong")){
    echo "Function exits";
}
else{
    echo "Function does not exits";
}
?>