<?php
session_start();


// 세션 변수 삭제
unset($_SESSION['userId']);
session_destroy();

// 로그인 페이지로 리디렉션
header("Location: login.php");
exit();
