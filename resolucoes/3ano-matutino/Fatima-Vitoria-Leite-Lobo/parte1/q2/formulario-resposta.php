<?php
	/*
	2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
	Entrada: 4
	Saída: Dobro: 8 e Metade: 2
	*/
	$numero = $_POST["numero"] ?? 0;
	$dobro = $numero * 2;
	$metade = $numero /2;

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
		<h1>Questão 2 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Informe os itens solicitados</h2>
			<form action="formulario-resposta.php" method="post">
				<label>
					Número:
					<input type="number" name="numero"  value="<?=$numero?>" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Dobro: </p>
			<p class="alerta-verde"><?=$dobro?></p>
			<p>Metade: </p>
			<p class="alerta-verde"><?=$metade?></p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>