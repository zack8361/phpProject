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
    }
}
