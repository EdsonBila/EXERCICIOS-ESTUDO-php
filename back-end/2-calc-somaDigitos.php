<?php
$numeroDigitado = $_POST["numero-digitado"];

$resul = 0;
for ($indice = 0; $indice < strlen($numeroDigitado); $indice++){
    $resul += $numeroDigitado[$indice];
}

$resultado = $resul;

header("Location: ../html/cal2.php?resultado=$resultado");
?>