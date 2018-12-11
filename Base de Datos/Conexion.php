<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'Localhost';
 	$db = 	'Caritas';
 	$user = 'root';
 	$pwd = 	'root';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);

	}
	catch (PDOException $e) {
		echo '<p>Error al conectar a la base de datos</p>';
	    exit;
	}
	return $conn;
 }

 ?>