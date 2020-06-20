<?php
$host = "localhost";
$name = "aarg80_1";
$user = "aarg80";
$passwort = "L416FLT35vTtIP2v";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>