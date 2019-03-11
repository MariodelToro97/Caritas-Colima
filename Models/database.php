<?php

/*$server = 'localhost: 3306';
$username = 'root';
$password = '';
$database = 'caritascolima';*/

try {
  //$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  /*$conn = new mysqli($server,$username,$password,$database);
  $conn -> set_charset("utf8");*/
  require 'conexion.php';
} catch (PDOException $e) {
  die('Conexión Fallida: '.$e->getMessage());
}

 ?>
