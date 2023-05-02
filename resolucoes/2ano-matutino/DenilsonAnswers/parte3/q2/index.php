<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tabuada</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre com o número</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="idnum" name="num" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
<?php

$metodo= $_SERVER["REQUEST_METHOD"];

if($metodo == "POST"){
	$num=$_POST["num"];
	$contador=0;
	$result=0;

	

	while($contador<=10)
	{

		$result= $num*$contador;
		print("<p class='alerta-verde'>{$num} x {$contador} = {$result}</p>");
		$contador++;

	}
	


}else{}
?>			
		</div>
	</div>
</body>
</html>