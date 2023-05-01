<!DOCTYPE html>
<html>
<head>
	<meta charset = UTF-8>
	<title>Questao 3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Imprimir as notas de um aluno</h1>
	<form action = "resposta.php" method = "POST">
		<label> Digite a primeira nota: </label>
		<input type= "number" name= "num1" placeholder= "num1" required /><br>
		<label> Digite a segunda nota: </label>
		<input type= "number" name= "num2" placeholder= "num2" required /><br>
		<label> Digite a terceira nota: </label>
		<input type= "number" name= "num3" placeholder= "num3" required />
		<br><br>
		<input type= "submit" value="calcular" name="sendNumero" />
	</form>


</body>
</html>