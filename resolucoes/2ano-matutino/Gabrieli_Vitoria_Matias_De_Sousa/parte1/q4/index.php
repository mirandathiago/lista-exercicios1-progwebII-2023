<!--Um motorista precisa saber a quantidade de combustível que será necessária para percorrer uma certa distância em seu carro, levando em conta o consumo médio de combustível. Crie um formulário que receba a distância a ser percorrida e o consumo médio de combustível do carro, e calcule a quantidade de combustível necessária.
Entrada: Distância a percorrer: 200 km
Consumo médio de combustível: 10 km/l
Saída: Quantidade de combustível necessária: 20 litros
-->

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
		<h1>Calculadora de Combustivel</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            <form action="index.php" method="POST">
                Distância a percorrer (km): <input type="number" name="distancia"><br><br>
		        Consumo médio de combustível (km/l): <input type="number" step="0.01" name="consumo"><br><br>
		        <button type="submit" name="submit">Calcular</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Distancia</h2>
			<?php
                   	if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $distancia = $_POST["distancia"];
                        $consumo = $_POST["consumo"];
                        $quantidade = $distancia / $consumo;
                        echo "Quantidade de combustível necessária: " . $quantidade . " litros";
                    }     
			?>
		</div>
	</div>
</body>
</html>