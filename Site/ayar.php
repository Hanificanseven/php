<?php
$db;
try {
    $host="localhost";
    $dbname="forlog";
    $user="root";
    $password="";
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

} catch (PDOException $ex) {
    die($ex->getMessage());
}
?>