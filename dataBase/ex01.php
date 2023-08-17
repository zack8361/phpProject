
<?php

$servername = "localhost";
$username = "root";
$password = "paul2858";


try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    echo "<p>DB 연결에 성공하였습니다. </p>";
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

// 디비 생성해보기.
// try{
//     $sql = "CREATE DATABASE firstdb";
//     $conn->exec($sql);
//     echo "db 생성 성공";
// } catch (PDOException $e){
//     ECHO "생성 실패";
//     ECHO "<br>";
//     echo $e->getMessage();
// }

// $conn = null;
 


// <?php


// // Mysqli 절차 지향 방식.

// use CodeIgniter\CLI\Console;

// $servrname = "localhost";
// $username = "root";
// $password = "123123123";

// $conn = mysqli_connect($servrname, $username, $password);


// // 부정문 먼저쓰네
// if (!$conn) {
//     die("DB 연결에 실패하였스빈다");
// }

// echo "DB 연결에 성공하였습니다.";




