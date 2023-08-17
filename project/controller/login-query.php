<?php

include "../model/db.php";
include "../model/memer.php";

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$mem = new Member($db);

$encrypted_password = $mem->hashPassword($password);


try {
    // 로그인 성공 과 실패 분기
    if ($mem->login($email, $encrypted_password)) {
        $arr = array("result" => "login_success");
        // 세션 부여 해주기.
        session_start();
        $_SESSION['userId'] = $email;
    } else {
        $arr = array("result" => "login_fail");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

die(json_encode($arr));
