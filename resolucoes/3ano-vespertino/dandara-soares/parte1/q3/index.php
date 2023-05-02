<!DOCTYPE html>
<html> 
<head>
	<meta charset="UTF-8"> 
	<title>Formulário para calcular média do aluno</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Média Ponderada</h2>
			<form action="resposta.php" method="get">
				<label>Peso da primeira prova
					<input type="number" name="p1" required step = "0.1" value = "2">
				</label>
				<label>Nota do aluno
					<input type="number" name="n1" required step = "0.1" value = "7.0">
				</label>
				<label>Peso da segunda prova
					<input type="number" name="p2" required step = "0.1" value = "3">
				</label>
				<label>Nota do aluno
					<input type="number" name="n2" required step = "0.1" value = "6.5">
				</label>
				<label>Peso da terceira prova
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