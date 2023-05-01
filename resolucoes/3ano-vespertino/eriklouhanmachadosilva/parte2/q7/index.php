<?php
$genero = $_POST["genero"] ?? "";
$nome = $_POST["nome"] ?? "";
$idade = $_POST["idade"] ?? 18;
$peso = $_POST["peso"] ?? 50;
$altura = $_POST["altura"] ?? 150;



switch($genero){
    case 1:
        $tbm = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
        break;
    case 2:
        $tbm = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
        break;

}



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title> Calculadora de Gasolina</title>
</head>
<body>
    <header>
        <h1>Calculadora de Gasolina</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de consumo médio de gasolina</h2>
            <form action="index.php" method="post">
                

            <fieldset>
                <legend>Gênero:</legend>
                <label>Masculino
                        <input type="radio" name="genero" value="1">
                </label>
                <label>Feminino
                        <input type="radio" name="genero" value="2">
                </label>
                </fieldset>
                
                <label>Nome:
                        <input type="text"  name="nome">
                </label>

                <label>Idade:
                        <input type="number"  name="idade" min="0">
                </label>  

                <label>Peso em kg:
                        <input type="number" step="0.01" name="peso">
                </label>

                <label>Altura em cm:
                        <input type="number"  name="altura">
                </label>

                <button name="enviar"> Enviar </button>


            </form>
            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
						echo "<p class='alerta-verde'>{$nome} a sua taxa de metabolismo basal (TMB) é de aproximadamente {$tbm} calorias por dia</p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>

