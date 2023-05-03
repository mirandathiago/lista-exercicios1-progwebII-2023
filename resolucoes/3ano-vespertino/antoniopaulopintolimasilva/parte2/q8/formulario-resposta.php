<?php
	$peso = $_POST["num"] ?? 50.0;
	$altura = $_POST["num2"] ?? 1.60;

	$imc = $peso / ($altura**2);
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
		<h1>Formulário de Índice de Massa Corporal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Índice de Massa Corporal</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Peso:
					<input type="number" name="num" required value="<?=$peso?>">
				</label>
				<label>Altura:
					<input type="number" name="num2" required value="<?=$altura?>" step="0.1">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];

			if($metodo == "POST")
				if($imc < 18.5)
					echo "Seu IMC é ".number_format($imc,2).", e você está, abaixo do peso";
				elseif($imc >= 18.5 && $imc < 24.9)
					echo "Seu IMC é ".number_format($imc,2).", e você está, peso normal";
				elseif($imc >= 25 && $imc < 29.9)
					echo "Seu IMC é ".number_format($imc,2).", e você está, sobrepeso";
				elseif($imc >= 30 && $imc < 34.9)
					echo "Seu IMC é ".number_format($imc,2).", e você está, Obsidade grau 1";
				elseif($imc >= 35 && $imc < 39.9)
					echo "Seu IMC é ".number_format($imc,2).", e você está, Obsidade grau 2";
				elseif($imc > 40)
					echo "Seu IMC é ".number_format($imc,2).", e você está, Obsidade grau 3";
			
			?>
		</div>
	</div>
</body>
</html>