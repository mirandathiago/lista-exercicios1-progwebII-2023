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
		<h1>Formulário de Sorteio</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Nomes do Sorteio</h2>
			<form action="index.php" method="post">
				<textarea name="nomes" cols="30" rows="10"></textarea>
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado Sorteio</h2>
			<p class="alerta-verde">
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
					$array_nomes = explode("\n", $_POST['nomes']);

					echo "O sorteado foi : " . $array_nomes[rand(0, (count($array_nomes) - 1))];

				} else {
					echo 'Aguardando Sorteio ...';
				}
				?>
			</p>

			<p class="alerta-amarelo">
				Lista dos Nomes:
				<?php
				if ($_SERVER['REQUEST_METHOD'] == "POST") {

					if ($array_nomes != null) {

						foreach ($array_nomes as $nome) {
							echo $nome . "- ";
						}
					}
				}
				?>
			</p>
		</div>
	</div>
</body>

</html>