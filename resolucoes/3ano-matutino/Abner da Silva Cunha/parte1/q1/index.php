<?php 


$valor = $_POST["valor"] ?? 75; 
$desconto = $valor * 0.1;
$resultado = $valor - $desconto; 

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				<label>valor:
					<input type="number" name="valor" required>
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>

			<p class="alerta-verde"> o preço inicial foi de R$<?=$valor?> com o desonte de R$<?=$desconto?> obtivemos o valor final de R$<?=$resultado?>. </p>

            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>