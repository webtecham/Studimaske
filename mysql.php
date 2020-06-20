<?php
$host = "localhost";
$name = "mcok83_2";
$user = "mcok83";
$passwort = "mWBjf4vyIVgVWjUS";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>
