<?php
$dia = $_POST['dia'];

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	switch ($dia) {
		case '1':
			$diaUtil = false;
			$diaNome = 'Domingo';
			break;
		case '2':
			$diaUtil = true;
			$diaNome = 'Segunda-feira';
			break;
		case '3':
			$diaUtil = true;
			$diaNome = 'Terça-feira';
			break;
		case '4':
			$diaUtil = true;
			$diaNome = 'Quarta-feira';
			break;
		case '5':
			$diaUtil = true;
			$diaNome = 'Quinta-feira';
			break;
		case '6':
			$diaUtil = true;
			$diaNome = 'Sexta-feira';
			break;
		case '7':
			$diaUtil = false;
			$diaNome = 'Sabado';
			break;
		default:
			$error = 'Numero invalido!!';
			break;
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 5</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 5</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calcula juros simples numero</h2>
			<form method="post" action="./index.php">
				<label>Dias da semana:
					<select name="dia">
						<option selected value="1">Domingo (1)</option>
						<option value="2">Segunda-feira (2)</option>
						<option value="3">Terça-feira (3)</option>
						<option value="4">Quarta-feira (4)</option>
						<option value="5">Quinta-feira (5)</option>
						<option value="6">Sexta-feira (6)</option>
						<option value="7">Sabado (7)</option>
					</select>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			if ($error) {
				echo "<p class='alerta-vermelho'>{$error}</p>";
			} else {
				echo "<p class='alerta-verde'>{$diaNome} é ";
				echo $diaUtil ? "dia util." : "final de semana.";
				echo "</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>