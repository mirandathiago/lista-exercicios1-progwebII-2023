<?php
	$num1 = "";
	$num2 = "";
	$num3 = "";
	$mensagem = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$num1 = $_POST["num1"] ?? 0;
		$num2 = $_POST["num2"] ?? 0;
		$num3 = $_POST["num3"] ?? 0;

		$maior = $num1;
		$menor = $num1;

		/*if($num2 > $maior){
			$maior = $num2;
		}
		
		if($num3 > $maior){
			$maior = $num3;
		}

		if($num2 < $menor){
			$menor = $num2;
		}
		
		if($num3 < $menor){
			$menor = $num3;
		}

		$mensagem = "<p class='alerta-verde'>O Maior dos Números é {$maior} e o menor é {$menor}</p>";*/


		if($num1 > $num2 && $num1 > $num3){
			$maior = $num1;
			$menor = ($num2 > $num3) ? $num3 : $num2;	
			$mensagem = "<p class='alerta-verde'>O Maior dos Números é {$maior} e o menor é {$menor}</p>";	
		}else if($num2 > $num1 && $num2 > $num3){
			$maior = $num2;
			$menor = ($num1 > $num3) ? $num3 : $num1;
			$mensagem = "<p class='alerta-verde'>O Maior dos Números é {$maior} e o menor é {$menor}</p>";	
		}else if($num3 > $num2 && $num3 > $num1){
			$maior = $num3;
			$menor = ($num2 > $num1) ? $num1 : $num2;
			$mensagem = "<p class='alerta-verde'>O Maior dos Números é {$maior} e o menor é {$menor}</p>";	
		}else if($num1 == $num2 && $num1 == $num3){
			$maior = $num1;
			$menor = $num1;
			$mensagem = "<p class='alerta-verde'>Os três números são Iguais</p>";	
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
		<h1>Questão 1 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>1- crie um formulário com três campos do tipo number e um botão, em seguida utilizando uma estrutura condicional verifique qual o maior número e qual o menor número e mostre essa informação na tela.
</h2>
			<form action="index.php" method="post">
				<label>Número 1:
					<input type="number" id="num1" name="num1" required value="<?=$num1?>">
				</label>
				<label>Número 2:
					<input type="number" id="num2" name="num2" required value="<?=$num2?>">
				</label>
				<label>Número 3:
					<input type="number" id="num3" name="num3" required value="<?=$num3?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?=$mensagem?>
		</div>
	</div>
</body>
</html>