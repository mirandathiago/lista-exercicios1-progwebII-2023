<!--
    João irá comprar uma terreno para construir sua casa e para isso gostaria de calcular a área total desse terreno, crie um formulário que receba a largura e o comprimento do terreno, em seguida crie um código PHP que irá calcular esta área e exibir na tela.
    Entrada: largura: 10m, comprimento: 20m
    Saída esperada: 200m2
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Calculadora de Combustivel</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            <form action="index.php" method="POST">
                <label for="largura">Largura do Terreno (em metros): </label>
                <input type="number" name="largura" required><br><br>
                <label for="comprimento">Comprimento do Terreno (em metros): </label>
                <input type="number" name="comprimento" required><br><br>
                <button type="submit" name="calcular">Calcular Área</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
               if(isset($_POST['calcular'])){
                $largura = $_POST['largura'];
                $comprimento = $_POST['comprimento'];
                $area = $largura * $comprimento;
                echo "<br>A área total do terreno é de $area m².";
                }
			?>
		</div>
	</div>
</body>
</html>