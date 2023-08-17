<?php

// 데이터가 넘어왔는지 확인.


// print_r($_FILES); -> 데이터가 잘넘어왔는지 확인. 연관 배열 형식으로 넘어온다.

echo "파일명 = ".$_FILES['ufile']['name'];
echo "<br>";
echo "파일용량 =".$_FILES['ufile']['size'];



// 파일 넣을 경로 
$tfile = '../upload/abc.png';


// 파일 넣기.
move_uploaded_file($_FILES['ufile']['tmp_name'], $tfile);


?>
