<!--Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2 -->

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
		<h1>Calculadora de Média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as notas</h2>
			<form action="index.php" method="POST">
                <input type="number" name="numero">
		        <button>Enviar</button>
            </form>
		</div>
		<div class="box resposta">
			<h2>Média</h2>
			<?php
                   	if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $numero = $_POST["numero"];
                        $dobro = $numero * 2;
                        $metade = $numero / 2;
                        echo "<h2> Dobro: " . $dobro . "</h2><br>";
                        echo "<h2>Metade: " . $metade . "</h2>";
                    }          
			?>
		</div>
	</div>
</body>
</html>