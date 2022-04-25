<?php
$preco = $_POST["preco"];
$porcentagem = $_POST["porcentagem"];

$porcentagemCalculada = $porcentagem / 100;
$porcentagemFinal = $porcentagemCalculada + 1;

$resultado = $preco / $porcentagemFinal;

header("Location: ../html/cal3.php?resultado=$resultado");
?>
