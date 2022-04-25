<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cal4-style.css">
    <title>Document</title>
</head>
    <body>
        <div class="container-form">
            <div class="container-1">
                <form method="post" name="form" action="../back-end/4-cal-multaPeixe.php">
                    <fieldset class="">
                    <legend>Valor de multa</legend>
                        <div class="content">
                            <div>
                                <div class="input-cal">
                                    <label for="peso">Informe o peso do peixe:</label>
                                    <input type="text" name="peso" id="peso" focus>
                                </div>
                                <button type="submit">Calcular</button>
                            </div>
                            <div class="input-resul">
                                <input class="resul1" type="text" value="<?php
                                    if(isset($_GET['excesso'])){
                                    echo  $_GET['excesso'];
                                }
                                else {  
                                }?>">
                                <input class="resul2" type="text" value="<?php
                                    if(isset($_GET['multa'])){
                                    echo $_GET['multa'];
                                }
                                else {
                                }?>">
                            </div>
                        </div>
                    </fieldset>
                </form>   
            </div>
        </div>
    </body>
</html>


