<?php
	$clima = $_POST["clima"] ?? 0;

	switch ($clima) {
		case "Ensolarado":
			$sugestao = "Clube";
			$status = 'S';
			break;
		case "Ameno":
			$sugestao = "Parque";
			$status = 'S';
			break;
		case "Chuvoso":
			$sugestao = "Cinema";
			$status = 'S';
			break;
		case "Nublado":
			$sugestao = "Museu";
			$status = 'S';
			break;
		case "Tempestuoso":
			$sugestao = "FICAR EM CASA";
			$status = 'N';
			break;
		default:
			$sugestao = "Invalida";
			break;
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
		<h1>Recomendação de Passeio</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione o clima do dia:</h2>
			<form action="index.php" method="post">
				<label>
					Climas possiveis:
					<select name="clima">
						<option value="Ensolarado">Ensolarado</option>
						<option value="Ameno">Ameno</option>
						<option value="Chuvoso">Chuvoso</option>
						<option value="Nublado">Nublado</option>
						<option value="Tempestuoso">Tempestuoso</option>
					</select>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sugestão:</h2>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {

					if ($status == 'S') {
						echo "<h3 class='alerta-verde'>Com o clima {$clima}, recomendamos que vc deve ir ao {$sugestao}</h3>";
					}else {
						echo "<h3 class='alerta-vermelho'>Com o clima {$clima}, recomendamos que vc deve {$sugestao}</h3>";
					}
					

				}
			?>
		</div>
	</div>
</body>
</html>