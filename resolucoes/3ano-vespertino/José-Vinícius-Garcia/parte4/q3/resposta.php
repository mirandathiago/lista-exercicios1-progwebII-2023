<?php

$pizzas = $_POST ["pizzas"] ?? [];
$tam = $_POST ["tam"] ?? "";

switch ($tam) {
	case '1':
		$tam = "Pequena";
		break;
	
case '2':
		$tam = "Média";
		break;
case '3':
		$tam = "Grande";
		break;
		
}



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
		<h1>Suas escolhas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<?php

echo "<p class='alerta-verde'>Sua pizza é tamanho {$tam} <br> </p>";
echo "<p class='alerta-amarelo'>O sabor escolhido foi: </p>";;
			foreach ($pizzas as $pizza) {
				echo " <br> <p class='alerta-amarelo'> {$pizza} </p>";
			}
			
			
			

			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>