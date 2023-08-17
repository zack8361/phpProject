<?php

include "../model/db.php";
include "../model/memer.php";

$mem = new Member($db);
$email = $_POST['email'];



// 1. 이메일 형식에 맞지 않으면 die
if (!$mem->emailCheck($email)) {
    $arr = array("result" => "inValidEmail");
    die(json_encode($arr));
}
$sql = "SELECT count(*) AS cnt from tuser WHERE sEmail = '$email'";
// db 연결을 conn으로 해서
try {
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetch();
    $arr = array("result" => $row['cnt'] ? "exist" : "not_exist");

    die(json_encode($arr));
} catch (Exception $e) {
    echo "연결잘못되었음";
}
