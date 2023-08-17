
<?php
/*
 * PHP 슈퍼 전역 $GLOBALS
 * 함수 안에서 선언해도 전역 변수 이므로 함수 밖에서 사용가능.
 */

function ex01(){
    
    $GLOBALS ['kong'] = "123";
}

ex01();

echo $GLOBALS['kong'];

echo "<br>";

echo "여기 페이지";

?>