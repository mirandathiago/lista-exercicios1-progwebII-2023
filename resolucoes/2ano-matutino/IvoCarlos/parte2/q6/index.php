<?php

        $metodo = ($_SERVER["REQUEST_METHOD"]);
	   // Recebe os valores dos lados do triângulo
        $lado1 = $_POST['lado1'] ?? " ";
        $lado2 = $_POST['lado2'] ?? " ";
        $lado3 = $_POST['lado3'] ?? " ";
		if($metodo == "POST"){

		// Verifica se é possível formar um triângulo
		if ($lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0) {
			$mensagem = "Os valores dos lados devem ser maiores que zero.";
		} elseif ($lado1 + $lado2 <= $lado3 || $lado1 + $lado3 <= $lado2 || $lado2 + $lado3 <= $lado1) {
			$mensagem = "Não é possível formar um triângulo.";
		} elseif ($lado1 == $lado2 && $lado1 == $lado3) {
			$mensagem = "É possível formar um triângulo equilátero.";
		} elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
			$mensagem = "É possível formar um triângulo isósceles.";
		} else {
			$mensagem = "É possível formar um triângulo escaleno.";
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Questão 16 - Tipos de triângulo  </h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os três lados do triângulo:</h2>
			<form action="index.php" method="post">
				<label>Lado 1:
					<input type="number" name="lado1" min="1" required value="<?=$lado1?>">
				</label>
				<label>Lado 2:
					<input type="number" name="lado2" min="1" required value="<?=$lado2?>">
				</label>
				<label>Lado 3:
					<input type="number" name="lado3" min="1" required value="<?=$lado3?>">
				</label>
				<button name="enviar"> Jogar </button>
			</form>
		</div>		
	
		<div class="box resposta">
			<h2> Resultado:</h2>
			<?php 
                if($metodo == "POST"){
			        echo "<h4>{$mensagem}<h4>";
                }
            ?>

		</div>
	</div>
</body>
</html>
