<?php
	$numero=$_POST["numero"] ?? 0;
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
		<h1>Soma dos números de 0  a N</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite qual o número limite da sequência de soma:</h2>
			<form action="index.php" method="post">
				<label>Número(N):
					<input type="number" id="numero" name="numero" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
		<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo =="POST"){
				$soma = 0;
				for($i=0;$i<=$numero;$i++){
					$soma+=$i;
				}
				echo"<h2>Soma dos números:</h2>";
				echo"<p class='alerta-amarelo'>A soma de todos os número entre 0 e {$numero} é:</p>";
				echo"<p class='alerta-amarelo'>{$soma}</p>";
			}
		?>

				<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>