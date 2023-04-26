<?php
    $num1 = $_POST["num1"] ?? "0";
    $dobro = $num1 * 2;
    $metade = $num1 / 2;
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
		<h1>Dobro e metade</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com um número para encontrar o dobro e a metade desse número:
					<input type="number" name="num1" required value="<?=$num1?>">
				</label>
		
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<h2>Dobro: <?=$dobro?> e Metade: <?=$metade?></h2>
		</div>
	</div>
</body>
</html>