<?php
	$dia = $_GET["dia"] ?? "";
	switch($dia){
		case "1":
			$resposta = "<p class='alerta-verde'>Final de semana</p>";
			break;
		case "2":
		case "3":
		case "4":
		case "5":
		case "6":
			$resposta = "<p class='alerta-amarelo'>Dia útil</p>";
			break;
		case "7":
			$resposta = "<p  class='alerta-verde'>Final de semana</p>";
			break;
		default:
			$resposta = "<p>Nenhum dia selecionado</p>";
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
		<h1>Questão 10</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form acton="index.php" method="get">

				<label>Dia da semana:
					<select name="dia">
						<option <?=$dia==""?"selected":""?> ></option>
						<option <?=$dia=="1"?"selected":""?> value="1">Domingo</option>
						<option <?=$dia=="2"?"selected":""?> value="2">Segunda-Feira</option>
						<option <?=$dia=="3"?"selected":""?> value="3">Terça-Feria</option>
						<option <?=$dia=="4"?"selected":""?> value="4">Quarta-Feira</option>
						<option <?=$dia=="5"?"selected":""?> value="5">Quinta-Feira</option>
						<option <?=$dia=="6"?"selected":""?> value="6">Sexta-Feria</option>
						<option <?=$dia=="7"?"selected":""?> value="7">Sábado</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>	
		
		<div class="box resposta">

			<?php

				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "GET"){
					echo "<p>{$resposta}</p>";
				}

			?>

		</div>

	</div>
</body>
</html>