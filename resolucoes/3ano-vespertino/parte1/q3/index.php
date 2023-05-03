<?php
/*
3- Um professor precisa calcular a média final de um aluno em uma disciplina, levando em conta as notas obtidas em três provas com pesos diferentes: 
a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5. Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.
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
		
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Média Ponderada</h2>
			<form action="receber1.php" method="get">
				<label>Peso da primeira avaliação
					<input type="number" name="p1" required step = "0.1" value = "2">
				</label>
				<label>Nota do aluno
					<input type="number" name="n1" required step = "0.1" value = "7.0">
				</label>
				<label>Peso da segunda avaliação
					<input type="number" name="p2" required step = "0.1" value = "3">
				</label>
				<label>Nota do aluno
					<input type="number" name="n2" required step = "0.1" value = "6.5">
				</label>
				<label>Peso da terceira avaliação
					<input type="number" name="p3" required step = "0.1" value = "5">
				</label>
				<label>Nota do aluno
					<input type="number" name="n3" required step = "0.1" value = "8.0">
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>