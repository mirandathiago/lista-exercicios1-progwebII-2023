<?php
        $metodo = $_SERVER["REQUEST_METHOD"];
        $valor = $_POST['valor'] ?? "";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
<header>
    <h1>Questão 27 -  O Caixa eletrônico</h1>
</header>
<div class="container">
    <div class="box formulario">
        <h2>Menor quantidade de notas:</h2>
        <form action="index.php" method="post">
            <label>Informe o valor:
                <input type="number" name="valor" min="1" required value="<?=$valor?>" >
            </label>

            <button name="enviar">Ver quantidade de cédulas</button>
        </form>
    </div>

    <div class="box resposta">
        <h2>Resultado:</h2>
        <?php 
                if ($metodo == "POST") {
                    $cem = 0;
                    $cinquenta = 0;
                    $vinte = 0;
                    $dez = 0;
                    $cinco = 0;
                    $dois = 0;
                    $um = 0;
                    $aux = $valor;
                        while($valor > 0){
                             if($valor >= 100){
                                $valor = $valor - 100;
                                $cem++;
                             }
                             else if($valor >= 50){
                                $valor = $valor - 50;
                                $cinquenta++;
                             }
                            else if($valor >= 20){
                                $valor = $valor - 20;
                                $vinte++;
                             }
                             else if($valor >= 10){
                                $valor = $valor - 10;
                                $dez++;
                             }
                             else if($valor >= 5){
                                $valor = $valor - 5;
                                $cinco++;
                             }
                             else if($valor >= 2){
                                $valor = $valor - 2;
                                $dois++;
                             }else{
                                $valor = $valor - 1;
                                $um++;
                             }  
                        }
                        echo"Valor informado:R$ {$aux} <br><br>
                             {$cem} nota(s) de R$100     <br>
                             {$cinquenta} nota(s) de R$50<br>
                             {$vinte} nota(s) de R$20    <br>
                             {$dez} nota(s) de R$10      <br>
                             {$cinco} nota(s) de R$5     <br>
                             {$dois} notas(s) de R$2     <br>
                             {$um} nota(s) de R$1        <br>";
                    }
        ?>
    </div>
</div>
</body>
</html>