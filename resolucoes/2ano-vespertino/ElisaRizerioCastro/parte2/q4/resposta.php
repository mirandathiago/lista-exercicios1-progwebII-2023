<?php
/// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	// Obtém os valores dos campos do formulário
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para saudação</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado:</h2>
			<?php
			// Verifica se os valores informados são números
		if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {//!is_numeric = Retorna um valor Boolean indicando se um expressão pode ser avaliado como um número.
			echo "<p>Por favor, informe valores numéricos para os campos A, B e C.</p>";
		} else {
			// Calcula as raízes da equação de segundo grau
			$delta = pow($b, 2) - 4 * $a * $c;
			//verifica se a equação possuí raízes
			if ($delta < 0) {
				echo "<p>A equação não possui raízes reais.</p>";
			} else if($delta == 0){
				$x = -$b / (2*$a);
				echo"<p>A equação só possui uma raiz real, sendo ela {$x}</p>";
			}else if($delta > 0){
				$X1 = (-$b + sqrt($delta)) / (2 * $a);
				$X2 = (-$b - sqrt($delta)) / (2 * $a);

				echo "<p>As raízes da equação são:</p>";
				echo "<p>X1 = $X1</p>";
				echo "<p>X2 = $X2</p>";
				}
			}
		?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>