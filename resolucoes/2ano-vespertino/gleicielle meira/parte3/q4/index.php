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
		<h1>Soma de números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o valor:</h2>
			<form action = "index.php" method = "post">

				<label>Digite o valor de N:
					<input type="number" id="n" name="n" required>
				</label>
				
				<button name="enviar"> CALCULAR </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

			

        <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$n = $_POST ["n"] ?? 0;
$soma = 0;

for($i = 1; $i<= $n; $i++){

$soma += $i;

}

echo "<p> A soma dos números de 1 a {$n} é de: {$soma} </p>";

}
		?>
		</div>
	</div>
</body>
</html>