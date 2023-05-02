<?php
$numero = $_POST['numero'];
$imparOuPar = $_POST['imparOuPar'];

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
	$numeroAleatorio = rand(1, 10);

	$soma = $numero + $numeroAleatorio;
	if ($soma % 2 == 0) {
		$resultado = 'par';
	} else {
		$resultado = 'impar';
	}

	if ($imparOuPar == $resultado) {
		$usuarioGanhou = true;
	} else {
		$usuarioGanhou = false;
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
				<label>Impar ou par:
					<select name="imparOuPar">
						<option selected value="impar">Impar</option>
						<option value="par">Par</option>
					</select>
				</label>

				<label>Numero:
					<select name="numero">
						<option selected value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Valor total a ser pago</h2>
			<?php
			echo "<p class='alerta-verde'>O usuário escolheu {$imparOuPar} e o número {$numero}. O computador sorteou o número {$numeroAleatorio}, e a soma deles é {$soma}. {$soma} é {$resultado} e o ";
			echo $usuarioGanhou ? 'usuario venceu' : 'computador venceu';
			echo "</p>";
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>