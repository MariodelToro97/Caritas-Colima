<?php

	$server = 'localhost: 3306';
	$username = 'root';
	$password = '';
	$database = 'caritascolima';

	//$conexion = new mysqli('localhost', 'root', '', 'caritascolima', 3306);
	$conexion = new mysqli($server,$username,$password,$database);
	$conexion -> set_charset("utf8");
?>