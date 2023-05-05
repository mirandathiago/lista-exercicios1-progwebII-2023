<?php

	$nota1 = $_POST["nota1"] ?? "";
	$nota2 = $_POST["nota2"] ?? "";
	$nota3 = $_POST["nota3"] ?? "";
	$msg = "";
	$metodo = $_SERVER["REQUEST_METHOD"];

	if($metodo == "POST"){

		$nota1p = $nota1 * 2;
		$nota2p = $nota2 * 3;
		$nota3p = $nota3 * 5;

		$media = ($nota1p + $nota2p + $nota3p) / 10;
		$media = number_format($media,2);

		if($media >= 6 ){
			$msg = "<p class='alerta-verde'>O aluno foi aprovado com a média de {$media}. </p>";
		}else{
			$msg = "<p class='alerta-vermelho'>O aluno foi reprovado com a média de {$media}. </p>";
		}
		


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
		<h1>Questão 3 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>3- Um professor precisa calcular a média final de um aluno em uma disciplina, levando em conta as notas obtidas em três provas com pesos diferentes: a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5. Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.</h2>
			
			<form action="index.php" method="post">
				<label>Nota 1:
					<input type="number" id="nota1" name="nota1"  step="0.1" required value="<?=$nota1?>">
				</label>
				<label>Nota 2:
					<input type="number" id="nota2" name="nota2"  step="0.1" required value="<?=$nota2?>">
				</label>
				<label>Nota 3:
					<input type="number" id="nota3" name="nota3"  step="0.1" required value="<?=$nota3?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?=$msg?>
           
		</div>
	</div>
</body>
</html>