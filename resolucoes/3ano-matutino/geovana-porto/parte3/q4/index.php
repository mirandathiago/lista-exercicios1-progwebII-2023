<?php

$n = $_POST["n"] ?? 0;
$num= 1;
$soma = 0;

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
		<h1>Formulário de Soma de números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Soma de números</h2>
			<hr>
			<br>
			<form action="index.php" method="post">
				
			    <label>Informe um número:
					<input type="number" id="n" name="n" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<hr>
			<br>
			
			<?php
			
    for($i = $num; $i <= $n; $i++ ){
      $soma = $soma + $i;
    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo "Soma dos números de 1 a $n:  $soma";
	}
?>        
		</div>
	</div>
</body>
</html>