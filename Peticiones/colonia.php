<?php
session_start();
require '../Models/database.php';

$key = $_POST['key'];


$records = $conn->prepare('SELECT * FROM personas WHERE UPPER(colonia) COLLATE utf8_general_ci LIKE UPPER(_utf8"%":name"%") COLLATE utf8_general_ci');
$records-> bindParam(':name', $key);
$records->execute();
$results = $records->fetch(PDO::FETCH_ASSOC);

if ($results->num_rows > 0) {
  while ($row = $results->FETCH_ASSOC()){
    $html .= '<div><a class="sugerencia-elemento" data="'.utf8_encode($row['colonia']).'" id="product'.$row['idcaso'].'">'.utf8_encode($row['colonia']).'</a></div>';
  }
}
echo $html;
?>
