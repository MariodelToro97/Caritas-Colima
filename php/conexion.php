<?php
	$db='caritas';
	$con=mysql_connect('localhost','root','') or die('Conecction Failed');
	mysql_select_db($db,$con)or die('Something went wrong whit Data Base');
?>