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
		<h1>Minha Loja/Nossa Loja</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>A nossa loja te dá 10% de desconto:</h2>
			<form action="index.php" method="post">
				<label>Valor da compra:
					<input type="number" id="precoin" name="precoin" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>O preço final será:</h2>
			<?php
				if ($_SERVER["REQUEST_METHOD"]=="POST") {
				
					$precoinicial = $_POST["precoin"];
					$precofinal = $precoinicial * 0.9;
					echo "<p class='alerta-vermelho'>O valor com o desconto oferecido é de R$ {$precofinal}</p>";
				}
			?>
		</div>
	</div>
</body>
</html>