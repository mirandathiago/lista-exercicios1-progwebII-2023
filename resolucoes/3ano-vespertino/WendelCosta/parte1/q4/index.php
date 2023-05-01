<?php
/*
	4- Um motorista precisa saber a quantidade de combustível que será necessária para percorrer uma certa distância em seu carro, levando em conta o consumo médio de combustível. Crie um formulário que receba a distância a ser percorrida e o consumo médio de combustível do carro, e calcule a quantidade de combustível necessária.
	Entrada: Distância a percorrer: 200 km
	Consumo médio de combustível: 10 km/l
	Saída: Quantidade de combustível necessária: 20 litros
*/


    $viagem = $_POST["d_viagem"] ?? 1;
	$combustivel = $_POST["combustivel_m"] ?? 1;
	
	$qntd_media = $viagem / $combustivel;

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cálculo médio de Combustível</h2>
			<form action="index.php" method="post">
                <label>
                    Distância da viagem:
                        <input type="float" id="d_viagem" name="d_viagem" required >
                </label>
				<label>
                    Consumo médio de combustível:
                        <input type="float" id="combustivel_m" name="combustivel_m" required >
                </label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Cálculo do Combustível necessário</h2>
			<h4>A distância da viagem é de <?= $viagem?>km, e o consumo médio de combustível é de  <?= $combustivel?>km/L</h4>
			<p>A quantidade de combustível necessária para terminar a viagem é de: <?= $qntd_media?>L</p>
		</div>
	</div>
</body>
</html>