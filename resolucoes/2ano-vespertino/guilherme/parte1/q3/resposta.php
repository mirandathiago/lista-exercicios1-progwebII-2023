<?php
/*
3- Um professor precisa calcular a média final de um aluno em uma disciplina, levando em conta as notas obtidas em três provas com pesos diferentes: a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5. Crie um formulário que receba as notas do aluno em cada prova e calcule a média final.
Entrada: 
Nota da primeira prova: 7,0
Nota da segunda prova: 6,5
Nota da terceira prova: 8,0
Saída: Média final: 7,45
*/

$nota1=$_GET["nota1"] ?? 5;
$nota2=$_GET["nota2"] ?? 5;
$nota3=$_GET["nota3"] ?? 5;

$media=(($nota1*2)+($nota2*3)+($nota3*5))/10;

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
		<h1>MÉDIA FINAL</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Média</h2>
			<p>A média do aluno foi de <?=$media?> pontos</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>