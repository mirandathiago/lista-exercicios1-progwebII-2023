<?php
        $largura = $_POST["largura"] ?? 0;
        $comprimento = $_POST["comprimento"] ?? 0;
        
        $area = $largura * $comprimento;


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
		<h1>Questao 6</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="questao6_1.php" method="post">
				
				<label>Largura:
					<input type="number" name="largura" required>
				</label>
				<label>Comprimento:
					<input type="number" name="comprimento" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A àrea total é de <?=$area?></p>
			
		</div>
	</div>
</body>
</html>
