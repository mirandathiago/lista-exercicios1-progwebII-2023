<?php

$valor1 = $_POST["valor1"] ?? 0;
$valor2 = $_POST["valor2"] ?? 0;
$valor3 = $_POST["valor3"] ?? 0;

//condinção para o valor maior
$maior = "esperando...";
$menor = "esperando...";
if($valor1 > $valor2 && $valor1 > $valor3){
    $maior = $valor1;
}
else if($valor2 > $valor1 && $valor2 > $valor3){
    $maior = $valor2;
}

else if($valor3 > $valor1 && $valor3 > $valor2){
    $maior = $valor3;
}

//condinção para o valor menor
if($valor1 < $valor2 && $valor1 < $valor3){
    $menor = $valor1;
}
else if($valor2 < $valor1 && $valor2 < $valor3){
    $menor = $valor2;
}

else if($valor3 < $valor1 && $valor3 < $valor2){
    $menor = $valor3;
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
		<h1>Lista parte-2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-01</h2>
			<form method="post" action="index.php">
				<label>Digite o primeiro valor:
					<input type="text" name="valor1"  required >
				</label>
				<label>Digite o segundo valor:
					<input type="text" name="valor2" required >
				</label>
                <label>Digite o treceiro valor:
					<input  type="text" name="valor3" required  >
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
            <h2>Valor menor: <?=$menor?></h2>
            <h2>Valor Maior: <?=$maior?></h2>
			
		</div>
	</div>
</body>
</html>