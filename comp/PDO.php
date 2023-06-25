<?php
session_start();
var_dump($_SESSION);
$databasenaam = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$databasenaam;dbname=jj-reizen", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected succesfully";
} catch (PDOException $e) {
    //echo "Connection failed: " . $e->getMessage();

}
