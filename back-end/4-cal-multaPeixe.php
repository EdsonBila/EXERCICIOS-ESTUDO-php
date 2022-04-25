<?php
$peso = $_POST["peso"];

if ($peso > 50) {
    $excesso = $peso - 50;
    
    $multa = 0;
    $qnt = 0;
    $i = $excesso; 
    while($i >= 5) {
        $i = $i - 5;
        $qnt++;
    }
    if ($i != 0) {
        $quantidade = $qnt * 4;
        $multa = $quantidade + 4;
    }
    else {
        $multa = $qnt * 4;
    }

    header("Location: ../html/cal4.php?multa=Total de multa: R$ $multa&excesso=Total de excesso: $excesso Kg");
}
else {
    header("Location: ../html/cal4.php?multa=Nao teve multa&excesso=Nao teve excesso no peso");
}
?>