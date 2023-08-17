<?php


if('POST' == $_SERVER['REQUEST_METHOD']){
    echo $_POST['my_name']."님 안녕하세요";
}

else{
    print <<<_HTML_
<form method = "post" action="$_SERVER[PHP_SELF]">
    이름 : <input type="text name="my_name">
    <button type ="submit">인사 버튼</button>
</form>
_HTML_;
}