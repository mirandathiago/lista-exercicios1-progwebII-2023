<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calcular valor da energia</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calcular metade e dobro</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o número</h2>

			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="idnum" name="numero" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
<?php

$metodo= $_SERVER["REQUEST_METHOD"];

if($metodo=="POST"){

 $num=$_POST["numero"];
 $metade=($num/2);
 $dobro=($num*2);
 
	print("<p class='alerta-verde'> A metade de {$num} é {$metade} <br> O dobro de {$num} é {$dobro} </p>");

}else{
			
	 }
			
?>
		</div>
	</div>
</body>
</html>