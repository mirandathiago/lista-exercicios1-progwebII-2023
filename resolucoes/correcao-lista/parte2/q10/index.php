<?php

	$dia = $_POST["dia"] ?? "";



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
		<h1>Questão 10 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>10- João trabalha em uma empresa que funciona de segunda a sexta-feira, mas ele tem um compromisso importante no trabalho que precisa ser realizado em um dia específico da semana. Para ajudá-lo, você deve desenvolver um programa que permita que ele informe o dia da semana em que esse compromisso será realizado e o programa deve informar se é um dia útil, final de semana ou se o dia informado é inválido.</h2>

			<form action="index.php" method="post">
			
				<label>Dia da Semana:
					<select name="dia">
						<option></option>
						<option value="Domingo" <?=$dia == "Domingo" ? "SELECTED" : ""?>>Domingo</option>
						<option value="Segunda-Feira" <?=$dia == "Segunda-Feira" ? "SELECTED" : ""?>>Segunda-Feira</option>
						<option value="Terça-Feira" <?=$dia == "Terça-Feira" ? "SELECTED" : ""?>>Terça-Feira</option>
						<option value="Quarta-Feira" <?=$dia == "Quarta-Feira" ? "SELECTED" : ""?>>Quarta-Feira</option>
						<option value="Quinta-Feira" <?=$dia == "Quinta-Feira" ? "SELECTED" : ""?>>Quinta-Feira</option>
						<option value="Sexta-Feira" <?=$dia == "Sexta-Feira" ? "SELECTED" : ""?>>Sexta-Feira</option>
						<option value="Sábado" <?=$dia == "Sábado" ? "SELECTED" : ""?>>Sábado</option>
						
					</select>
			   </label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){


					switch($dia){
						case "Domingo":
							echo "<p class='alerta-amarelo'>{$dia}, Fim de Semana</p>";
						break;
						case "Segunda-Feira":
						case "Terça-Feira":
						case "Quarta-Feira":
						case "Quinta-Feira":
						case "Sexta-Feira":	
							echo "<p class='alerta-verde'>{$dia}, Dia Útil</p>";	
						break;
						case "Sábado":
							echo "<p class='alerta-amarelo'>{$dia}, Fim de Semana</p>";
						break;
						default:
							echo "<p class='alerta-vermelho'>Dia da Semana informado é inválido</p>";
						
					}




				}


			?>

		</div>
	</div>
</body>
</html>