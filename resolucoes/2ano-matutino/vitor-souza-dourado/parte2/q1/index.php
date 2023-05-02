<!DOCTYPE html>
<html>
<head>
	<title>QUESTÃO 1/ PARTE 2</title>
</head>
<body>
<h4> QUESTÃO 1/ PARTE 2 </h4> <br>
	<h1> Verificar menor e maior número </h1>
	<form method="post" action="index.php">
		<label>Valor 1:</label>
		<input type="number" name="valor1"><br><br>
		<label>Valor 2:</label>
		<input type="number" name="valor2"><br><br>
		<label>Valor 3:</label>
		<input type="number" name="valor3"><br><br>
		<input type="submit" value="Verificar maior e menor número">
	</form>
	<?php
		if(isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])){
			$valor1 = floatval($_POST['valor1']);
			$valor2 = floatval($_POST['valor2']);
			$valor3 = floatval($_POST['valor3']);

			$menor = $valor1;
			if($valor2 < $menor){
				$menor = $valor2;
			}
			if($valor3 < $menor){
				$menor = $valor3;
			}

			$maior = $valor1;
			if($valor2 > $maior){
				$maior = $valor2;
			}
			if($valor3 > $maior){
				$maior = $valor3;
			}

			
			echo "<br>Menor Número: ".$menor." e o Maior Número: ".$maior;
		}
	?>
	
</body>
</html>