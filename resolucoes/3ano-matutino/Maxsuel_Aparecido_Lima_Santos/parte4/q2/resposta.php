<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sorteio de Pessoas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sorteio de Pessoas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<p class="alerta-amarelo">
					<?php
						if(isset($_POST['enviar'])) {
							$nomes = $_POST['nomes'];
							
							if(empty($nomes)) {
								echo "Por favor, insira pelo menos um nome.";
							} else {
								$nomes_array = explode("\n", $nomes); // Quebra uma string em um array, ou seja, vira um array
								$num_nomes = count($nomes_array);
								$indice_sorteado = rand(0, $num_nomes - 1);
								$nome_sorteado = $nomes_array[$indice_sorteado];
								echo "A pessoa sorteada foi: " . $nome_sorteado;
							}
						}
					?>
			</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>