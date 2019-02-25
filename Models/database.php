<?php

$server = 'localhost: 3307';
$username = 'root';
$password = 'root';
$database = 'caritascolima';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Conexión Fallida: '.$e->getMessage());
}

 ?>
