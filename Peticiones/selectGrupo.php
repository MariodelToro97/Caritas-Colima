<?php
session_start();
require '../Models/database.php';

$records = $conn->prepare('SELECT * FROM instituciones ORDER BY nombreInstitucion');
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

if ($results) {
  echo $records;
} else {
  echo "No hay Grupos";
}
?>
