<?php
include "../model/db.php";

class ObjectTable
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function subMain($objectType)
    {
        $sql = "SELECT tobject.nObjectId, tobjectmap.sObjectName, tobject.nRentStatus
                FROM tobject
                JOIN tobjectmap ON tobject.sObjectType = tobjectmap.sObjectType
                WHERE tobjectmap.sObjectType = :objectType"; // :objectType 바인딩 사용

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':objectType', $objectType, PDO::PARAM_STR); // :objectType 바인딩 설정
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
