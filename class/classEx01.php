<?php

$object = new User;
print_r($object);

$object->name = "kong"; echo "<br>";
$object->password = "paul2858"; echo "<br>";
print_r($object); echo "<br>";
$object -> saveUser(); echo "<br>";


class User {
    public $name, $password;
    
    function saveUser(){
        echo "Save User code goes here";
    }
}

?>