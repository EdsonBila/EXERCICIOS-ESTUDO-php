<?php
$lado = $_POST["lado-quadrado"];

$resultado3 = $lado * $lado;

header("Location: ../html/cal1.php?resultado3=$resultado3");
?>