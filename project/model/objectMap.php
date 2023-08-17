<?php

include "../model/db.php";
class ObjectMap
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // objectMapList 뽑기
    public function objectMapList()
    {
        echo "<script> alert ('하이'); </script>";

        $sql = "SELECT * FROM tobjectmap";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
