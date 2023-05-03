<?php
	$num = $_POST["num"] ?? 1;
	$tipo = $_POST["option"] ?? 1;

	$num_ale = rand(0,10);

	$soma = $num + $num_ale;

	if($tipo == 1){
		$tipo = "par";
	}else{
		$tipo = "impar";
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
		<h1>Jodo do impar ou par</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Coleta de dados</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Número:
				<select name="num">
						<option></option>
						<option value="0">0</option>
						<option value="1">1</option>
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

				<label>Opção:
					<select name="option">
						<option></option>
						<option value="1">Par</option>
						<option value="2">Impar</option>
					</select>
			   </label>
				<button name="enviar"> Jogar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];

			if($metodo == "POST")
				if($soma %2 == 0 && $tipo == "par"){
					echo "<p>O usuário escolheu <strong>{$tipo}</strong> e o número {$num}. O computador sorteou o número {$num_ale}, e a soma deles é {$soma}.<br><strong> {$soma} é par e o usuário venceu.</strong></p>";
				}elseif($soma %2 != 0 && $tipo == "impar"){
					echo "<p>O usuário escolheu <strong>{$tipo}</strong> e o número {$num}. O computador sorteou o número {$num_ale}, e a soma deles é {$soma}.<br><strong> {$soma} é impar e o usuário venceu.</strong></p>";
				}elseif($soma %2 == 0 && $tipo == "impar"){
					echo "<p>O usuário escolheu <strong>{$tipo}</strong> e o número {$num}. O computador sorteou o número {$num_ale}, e a soma deles é {$soma}.<br><strong> {$soma} é par e o usuário perdeu.</strong></p>";
				}else{
					echo "<p>O usuário escolheu <strong>{$tipo}</strong> e o número {$num}. O computador sorteou o número {$num_ale}, e a soma deles é {$soma}.<br><strong> {$soma} é impar e o usuário perdeu.</strong></p>";
				}
			
			?>
			
		</div>
	</div>
</body>
</html>