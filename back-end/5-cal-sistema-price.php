<?php
$juros = $_POST["j"];
$valor = $_POST["v"];
$parcelas = $_POST["p"];
$json = "";

$valor_p = ($valor  * ($juros/100) * (1 + ($juros/100)) ** $parcelas) / ((1 + ($juros/100)) ** $parcelas -1);


$dados = [];
$valor_devedor = $valor;

for ($i = 0; $i < $parcelas; $i++) {
    $dados[$i]['qntParcelas'] = $parcelas;
    $dados[$i]['parcelas'] = $valor_p;
    $dados[$i]["juros"] = ($juros / 100) * $valor_devedor;
    $dados[$i]["amortizacao"] =$valor_p -  $dados[$i]["juros"];
    $dados[$i]["valor_devedor"] = $valor_devedor -  $dados[$i]["amortizacao"];
    $valor_devedor =  round($valor_devedor,2) -  $dados[$i]["amortizacao"];
   
    
    
}
$alt = array_values($dados);
$json = json_encode($alt);

header("Location: ../html/cal5.php?resultado=$json");
?>