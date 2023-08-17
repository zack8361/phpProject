<?php


include "../model/db.php";
// Member class file
class Member
{
    private $conn;

    // 생성자를 통해 db 접근.
    public function __construct($db)
    {
        $this->conn = $db;
    }


    // 이메일 형식 체크
    public function emailCheck($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // 세션 체크
    public function sessionCheck()
    {
    }


    // sha256 (단방향 해시 암호화 -> 복호화 불가능)
    public function hashPassword($password)
    {
        // 여기는 우선 db gui 나올때까지 쓰지말기.
        // $password_hash = strtoupper(hash("sha256", $password));
        // return $password_hash;
        return $password;
    }

    // 회원가입 처리
    public function register($marray)
    {
        var_dump($marray);

        $sql = "INSERT INTO tuser(sEmail,sPassword,sUserName) VALUES (:email, :password, :username)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $marray['email']);
        $stmt->bindParam(':password', $marray['password']);
        $stmt->bindParam(':username', $marray['username']);
        $result = $stmt->execute();
    }

    // 로그인 처리
    public function login($id, $pwd)
    {
        $sql = "SELECT * FROM tuser WHERE sEmail = '$id' AND sPassword = '$pwd'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->rowCount() ? true : false;
    }
}
