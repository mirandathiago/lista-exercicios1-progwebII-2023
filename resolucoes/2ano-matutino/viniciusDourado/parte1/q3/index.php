<!--
			/* 3- Um professor precisa calcular a média final de um aluno em uma disciplina, levando em conta as notas obtidas em três provas com pesos diferentes: a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5. Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.*/
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Média Final</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculo de Média Final</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form aciton="index.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>
				<label>Nota 1:
					<input type="number" id="nota1" name="nota1" step="0.1" required>
				</label>

				<label>Nota 2:
					<input type="number" id="nota2" name="nota2" step="0.1" required>
				</label>

				<label>Nota 3:
					<input type="number" id="nota3" name="nota3" step="0.1" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			//ira testar se o metodo de envio foi post	
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				$nome = $_POST["nome"] ?? "";
				$nota1 = $_POST["nota1"] ?? 0;
				$nota2 = $_POST["nota2"] ?? 0;
				$nota3 = $_POST["nota3"] ?? 0;
				//dividido por 10 pois é a soma dos pesos da prova
				$media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10;
				
				echo "<p class='alerta-verde'> O aluno {$nome} teve a media Final: {$media}</p>";
			}
			?>
		</div>
	</div>
</body>
</html>