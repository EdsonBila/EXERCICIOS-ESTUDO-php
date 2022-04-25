<?php
$base = $_POST["base-retangulo"];
$altura = $_POST["altura-retangulo"];

$resultado4 = $base * $altura;

header("Location: ../html/cal1.php?resultado4=$resultado4");
?>