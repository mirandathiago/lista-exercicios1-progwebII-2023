<?php

	$dias = $_POST["dias"] ?? ""; 

	switch ($dias) {
		case "1":
			$dia = "Domingo";
			$mensagem = "O {$dia} é um Final de Samana";
			break;
		
		case "2":
			$dia = "Segunda-Feira";
			$mensagem = "A {$dia} é um dia útil";
			break;
		
		case "3":
			$dia = "Terça-Feira";
			$mensagem = "A {$dia} é um dia útil";
			break;

		case "4":
			$dia = "Quarta-Feira";
			$mensagem = "A {$dia} é um dia útil";
			break;

		case "5":
			$dia = "Quinta-Feira";
			$mensagem = "A {$dia} é um dia útil";
			break;
		
		case "6":
			$dia = "Sexta-Feira";
			$mensagem = "A {$dia} é um dia útil";
			break;

		case "7":
			$dia = "Sábado";
			$mensagem = "O {$dia} é um Final de Samana";
			break;

		default:
			$dia = "";
			$mensagem = "Dia invalido, tente novamente";
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
		<h1>Agenda</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe o dia</h2>
			<form action="index.php" method="post"> 

				<label>Dias:
					<select name="dias">
						<option></option>
						<option <?=$dias == "1" ? "selected" : "" ?> value="1">1</option>
						<option <?=$dias == "2" ? "selected" : "" ?> value="2">2</option>
						<option <?=$dias == "3" ? "selected" : "" ?> value="3">3</option>
						<option <?=$dias == "4" ? "selected" : "" ?> value="4">4</option>
						<option <?=$dias == "5" ? "selected" : "" ?> value="5">5</option>
						<option <?=$dias == "6" ? "selected" : "" ?> value="6">6</option>
						<option <?=$dias == "7" ? "selected" : "" ?> value="7">7</option>
					</select>
			   </label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];

			if ($metodo == "POST") {
				echo "<p>{$mensagem}</p>";
			}else {
				echo "<p>Aguardando consulta...</p>";
			}
            

			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>