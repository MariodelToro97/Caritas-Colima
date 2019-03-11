<?php

	session_start();

	if (!isset($_SESSION['user_id'])) {
		header('Location: ../Index.php');
		exit;
	}

	//$conexion = mysqli_connect('localhost', 'root', '', 'caritascolima', 3306);
	require 'conexion.php';

 ?>
