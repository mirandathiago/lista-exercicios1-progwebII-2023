<?php

	$clima = $_POST["clima"] ?? "";

	switch ($clima) {
		case "1":
			$mensagem = "Com o clima Ensolarado, recomendamos ir ao Clube";
			break;

		case "2":
			$mensagem = "Com o clima Ameno, recomendamos ir ao Parque";
			break;

		case "3":
			$mensagem = "Com o clima Chuvoso, recomendamos ir ao Cinema";
			break;
		
		case "4":
			$mensagem = "Com o clima Nublado, recomendamos ir ao Museu";
			break;
		
		case "5":
			$mensagem = "Com o clima Tempestuoso, recomendamos que fique em casa";
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
		<h1>Escolha para sair</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Defina o Clima</h2>
			<form action="index.php" method="post">

				<label>Clima:
					<select name="clima" required>
						<option></option>
						<option <?=$clima == "1" ? "selected" : "" ?> value="1">Ensolarado</option>
						<option <?=$clima == "2" ? "selected" : "" ?> value="2">Ameno</option>
						<option <?=$clima == "3" ? "selected" : "" ?> value="3">Chuvoso</option>
						<option <?=$clima == "4" ? "selected" : "" ?> value="4">Nublado</option>
						<option <?=$clima == "5" ? "selected" : "" ?> value="5">Tempestuoso</option>
					</select>
			   </label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta - Saída ideal</h2>

			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if ($metodo == "POST") {
					echo "<p>{$mensagem}.</p>";
				}else {
					echo "<p>Aguardando consulta...</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>