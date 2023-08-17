<?php
unset($_SESSION['userId']);
session_destroy();

echo "세션이 종료되었습니다";
