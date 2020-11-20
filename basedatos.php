<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ex1m17';

try{
$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $e){
die('conexión fallida: '.$e->getMessage());

}
?>