<?php
$raio = $_POST["raio-circulo"];

$resultado1 = 3.14 * ($raio *$raio);

header("Location: ../html/cal1.php?resultado1=$resultado1");
?>
