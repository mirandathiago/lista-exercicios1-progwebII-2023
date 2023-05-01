<?php
    $nota1 = $_POST["nota1"] ?? 0;
    $nota2 = $_POST["nota2"] ?? 0;
    $nota3 = $_POST["nota3"] ?? 0;



    $media =  ($nota1 * 2 + $nota2 * 3 + $nota3 * 5)  / 10;

?>












<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">


    <title> Calculadora de médias</title>
</head>
<body>
    <header>
        <h1>Calculadora de Médias</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de média</h2>
            <form action="index.php" method="post">
                
                <label>Primeria Nota com Peso 2:
                        <input type="number" step="0.01" name="nota1">
                </label>

                <label>Segunda Nota com Peso 3:
                        <input type="number" step="0.01" name="nota2">
                </label>

                <label>Terceira Nota com Peso 5:
                        <input type="number" step="0.01" name="nota3">
                </label>

                <button name="enviar"> Enviar </button>


            </form>



            <div class="box resposta">
                <h2>Resposta</h2>
              <?php
              
              $metodo = $_SERVER["REQUEST_METHOD"];
					if($metodo == "POST"){
						echo "<p class='alerta-verde'> A média final do aluno foi {$media} </p>";
					}else{
						echo "<p class='alerta-amarelo'> Aguardando os dados do formulário</p>";
					}	
              
              
              ?>


            </div>        
        </div>
    </div>





    
</body>
</html>