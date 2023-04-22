
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Local Adequado</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Chegamos a uma conclusão</h2>
			<?php
	/* Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por Maria. Considere as seguintes opções de locais: 
	Ensolarado: Clube
	Ameno: Parque
	Chuvoso: Cinema
	Nublado: Museu
	Tempestuoso: Ficar em casa */
	$clima = $_GET["clima"];

	switch($clima){
		case "1":
			echo "<p class='alerta-azul'>Com o clima ensolarado, recomendamos ir ao Clube.</p>";
			break;
		case "2":
			echo "<p class='alerta-azul'>Com o clima ameno, recomendamos ir ao Parque.</p>";
			break;
		case "3":
			echo "<p class='alerta-azul'>Com o clima chuvoso, recomendamos ir ao Cinema.</p>";
			break;
		case "4":
			echo "<p class='alerta-azul'>Com o clima nublado, recomendamos ir ao Museu.</p>";
			break;
		case "5":
			echo "<p class='alerta-azul'>Com o clima Tempestuoso, recomendamos ir ficar em casa.</p>";
			break;
		default: echo "<p class='alerta-azul'>Algo deu errado.</p>";
	}

?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>