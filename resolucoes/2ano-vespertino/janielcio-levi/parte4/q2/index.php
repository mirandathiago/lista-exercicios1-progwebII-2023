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
		<h1>Sorteador</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Vamos começar o sorteio!!</h2>
			<form action="index.php" method="post">
				<label>Insira nomes para serem sorteados:
					<textarea id="pessoas" name="pessoas"></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sorteado(s)</h2>
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					$pessoas = $_POST["pessoas"] ?? 0;
					$arrayNomes = explode("\n",$pessoas);
					$qtdSorteio = count($arrayNomes);
					$numSorteado = rand(0,$qtdSorteio-1);
					$nomeSorteado = $arrayNomes[$numSorteado];
					echo "<h3>Dentre os nomes listados, o sortudo(a) foi {$nomeSorteado}</h3>";
				}
			?>
		</div>
	</div>
</body>
</html>