<?php
$base = $_POST["base-triangulo"];
$altura = $_POST["altura-triangulo"];

$resultado2 = ($base * $altura) / 2;

header("Location: ../html/cal1.php?resultado2=$resultado2");
?>