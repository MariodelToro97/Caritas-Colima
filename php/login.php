<?php
include('conexion.php');
if (isset($_POST['login'])) {

$usuario = $_POST['user'];
$pass = $_POST['pass'];

if (empty($usuario) | empty($pass)) 
	{
		console.log("No mola :c ");
	header("Location: ../Index.html");
	exit();
	}

$sql = mysql_query("SELECT * from users where User = '$usuario' and Pass = '$pass' ");
if ($row = mysql_fetch_array($sql)) 
		{
			console.log($sql);
			console.log("Ya entré UwU");
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: ../Menu.html");
		}else
			{
				console.log("Chale :c");
			header("Location: ../Index.html");
			exit();
		}
}
?>