<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cal3-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-form">
        <div class="container-1">
            <form method="post" name="form2" action="../back-end/3-calc-preco-de-lucro.php">
                <fieldset class="">
                    <legend>Calculo de Preço de lucro</legend>
                    <div class="input-calc2 input-cal">
                        <label for="preco">Informe o Preço:</label>
                        <input type="text" name="preco" id="preco">
                        <label for="porcentagem">Informe a Porcentagem:</label>
                        <input type="text" name="porcentagem" id="porcentagem">
                    </div>
                    <div class="input-resul2 input-resul">
                        <button type="submit">Calcular</button>
                        <input type="text" value="<?php
                            if(isset($_GET['resultado'])){
                            echo $_GET['resultado'];
                            }
                            else {
                            }?>">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>