<?php

$numero = $_POST["numero"] ?? "";
$soma = 0;

for($i = 1; $i <= $numero; $i++){
    $soma += $i;
  }

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
		<h1>Questao 4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="questao4_3.php" method="post">
				
				<label>Digite um número inteiro:
					<input type="number" name="numero" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
		    
          <?php
            echo "Soma dos números de 1 a $numero: $soma";
          ?>
			
		</div>
	</div>
</body>
</html>


