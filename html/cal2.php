<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cal2-style.css">
    <title>Document</title>
</head>
<body>
<div class="container-form">
        <div class="container-1">
            <form method="post" name="form" action="../back-end/2-calc-somaDigitos.php">
                <fieldset class="">
                    <legend>Soma do Digito</legend>
                    <div class="input-cal">
                        <label for="numero-digitado">Digite um Número:</label>
                        <input type="text" name="numero-digitado" id="numero-digitado">
                    </div>
                    <div class="input-resul">
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