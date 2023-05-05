<?php

	date_default_timezone_set("America/Bahia");

	$nome = "";
	$msg = "";

	if(isset($_GET["nome"])){

		$nome = $_GET["nome"];
		$hora = date("H");
		$horaatualcompleta = date("H:m:s");

		if($hora >= 5 && $hora <= 12 ){
			$msg = "Bom dia, {$nome}";
		}else if($hora > 12 && $hora <= 18){
			$msg = "Boa Tarde, {$nome}";
		}else if($hora > 18 && $hora <= 23){
			$msg = "Boa Noite, {$nome}";
		}else{
			$msg = "Vá Dormir, está de Madrugada";
		}

		$msg = "<p class='alerta-verde'>{$msg}. A hora atual é {$horaatualcompleta}</p>";

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
		<h1>Questão 3 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.<br>
			Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. <br>
			de 05 até 12h deve ser dado Bom dia<br>
			de 13h até 18h deve ser dado Boa Tarde<br>
			de 18h até 23h deve ser dado Boa Noite<br>
			de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.<br>
			</h2>

			<form action="index.php" method="get">
				<label>Nome:
					<input type="text" id="nome" name="nome" required value="<?=$nome?>">
				</label>
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?=$msg?>
		</div>
	</div>
</body>
</html>