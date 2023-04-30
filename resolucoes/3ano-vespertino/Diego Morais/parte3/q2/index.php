<?php

$valor = $_POST["valor"] ?? 7;

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Lista parte-3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-02</h2>
			<form method="post" action="index.php">
				<label>Digite um valor:
					<input type="number" name="valor"  required value="7" >
				</label>
				
								
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
          <h2>A tabuada do numero <?=$valor?>:</h2>
          <h2>
            
            
            <?php
               
              $mult = 1;
              $cont = 1;
              $calculo;
              while($cont < 5){
    
              $calculo = $valor * $mult;
              echo "$valor x  $mult = $calculo<br>";
              $mult++;
              $cont++;
              }


              ?>
            
            
            </h2>
			
		</div>
	</div>
</body>
</html>