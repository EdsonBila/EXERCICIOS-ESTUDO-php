<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cal1-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-form">
        <div class="container-1">
            <form method="post" name="form1" action="../back-end/1-cal-area1.php">
                <fieldset class="">
                    <legend>1 - Circulo</legend>
                    <div class="input-calc1 input-cal">
                        <label for="raio-circulo">Informe o Raio do circulo:</label>
                        <input type="text" name="raio-circulo" id="raio-circulo">
                    </div>
                    <div class="input-resul1 input-resul">
                        <button type="submit">Calcular</button>
                        <input type="text" value="<?php
                            if(isset($_GET['resultado1'])){
                            echo $_GET['resultado1'];
                            }
                            else {
                            }?>">
                    </div>
                </fieldset>
            </form>   
            <form method="post" name="form2" action="../back-end/1-cal-area2.php">
                <fieldset class="">
                    <legend>2 - Triangulo</legend>
                    <div class="input-calc2 input-cal">
                        <label for="base-triangulo">Informe a Base do triangulo:</label>
                        <input type="text" name="base-triangulo" id="base-triangulo">
                        <label for="altura-triangulo">Informe a Altura do triangulo:</label>
                        <input type="text" name="altura-triangulo" id="altura-triangulo">
                    </div>
                    <div class="input-resul2 input-resul">
                        <button type="submit">Calcular</button>
                        <input type="text" value="<?php
                            if(isset($_GET['resultado2'])){
                            echo $_GET['resultado2'];
                            }
                            else {
                            }?>">
                    </div>
                </fieldset>
            </form>
            <form method="post" name="form3" action="../back-end/1-cal-area3.php">
                <fieldset class="">
                    <legend>3 - Quadrado</legend>
                    <div class="input-calc1 input-cal">
                        <label for="lado-quadrado">Informe o Lado do quadrado:</label>
                        <input type="text" name="lado-quadrado" id="lado-quadrado">
                    </div>
                    <div class="input-resul3 input-resul">
                        <button type="submit">Calcular</button>
                        <input type="text" value="<?php
                            if(isset($_GET['resultado3'])){
                            echo $_GET['resultado3'];
                            }
                            else {
                            }?>">
                    </div>
                </fieldset>
            </form>
            <form method="post" name="form4" action="../back-end/1-cal-area4.php">
                <fieldset class="">
                    <legend>4 - Retangulo</legend>
                    <div class="input-calc2 input-cal">
                        <label for="base-retangulo">Informe a Base do retangulo:</label>
                        <input type="text" name="base-retangulo" id="base-retangulo">
                        <label for="altura-retangulo">Informe a Altura do retangulo:</label>
                        <input type="text" name="altura-retangulo" id="altura-retangulo">
                    </div>
                    <div class="input-resul4 input-resul">
                        <button type="submit">Calcular</button>
                        <input type="text" value="<?php
                            if(isset($_GET['resultado4'])){
                            echo $_GET['resultado4'];
                            }
                            else {
                            }?>">
                    </div>
                </fieldset>
            </form> 
        </div>
    </body>
</html>