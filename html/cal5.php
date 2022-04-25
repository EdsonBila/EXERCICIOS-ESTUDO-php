<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cal5-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-form">
        <div class="container-1"> 
            <form method="POST"  action="../back-end/5-cal-sistema-price.php">
                <fieldset class="">
                    <legend>Tabela Price: cálculo de financiamentos</legend>
                    <div class="input-calc2 input-cal">
                        <label for="v">Montante Financiado:</label>
                        <input type="number" step=any name="v" id="v">
                        <label for="j">Juros Financiado:</label>
                        <input type="number" step=any name="j" id="j">
                        <label for="p">Nº de Parcelas:</label>
                        <input type="number" name="p" id="p">
                    </div>
                    <div class="">
                        <button type="submit">Calcular</button>
                    </div>
                </fieldset>
            </form>
            <div class="table-div">
                <table>
                    <thead class="titulos-tabe">
                        <tr class="tr-titulo">
                            <th>Parcelas</th>
                            <th>Vlr Parcela</th>
                            <th>Amortização</th>
                            <th>Juros</th>
                            <th>Sdo Devedor</th>
                        </tr>
                    </thead>
                    <tbody class="corpo-table">
                    	<?php
                        if(isset($_GET['resultado'])){
                            $resul = $_GET['resultado'];
                            
                            $array = json_decode($resul);
                            for ($i = 0; $i < count($array); $i++): ?>
                            <tr class="tr-corpo">
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo number_format($array[$i]->parcelas,2); ?></td>
                                <td><?php echo number_format($array[$i]->amortizacao,2); ?></td>
                                <td><?php echo number_format($array[$i]->juros,2); ?></td>
                                <td><?php echo number_format($array[$i]->valor_devedor,2); ?></td>
                            </tr>
                            <?php endfor; ?>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>