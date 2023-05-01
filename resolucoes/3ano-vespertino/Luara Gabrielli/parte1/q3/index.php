<?php
/*3- Um professor precisa calcular a média final de um aluno em uma disciplina, levando em conta as notas obtidas em três provas com pesos diferentes: a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5. Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.
Entrada: 
Nota da primeira prova: 7,0
Nota da segunda prova: 6,5
Nota da terceira prova: 8,0
Saída: Média final: 7,45
*/
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
		<h1>Calcule sua nota</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de notas

			</h2>
			<form action="resposta.php" method="post">
				<label>Nome do Aluno:
					<input type="text" name="nome" required>
				</label>

				<label>Nota 1:
					<input type="number" step="0.01" name="nota1" required>
				</label>

				<label>Nota 2:
					<input type="number" step="0.01"  name="nota2" required>
				</label>

				<label>Nota 3:
					<input type="number" step="0.01" name="nota3" required>
				</label>

				


				

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>