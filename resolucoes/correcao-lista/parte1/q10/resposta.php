<?php
	$valor = $_POST["valor"] ?? 0;
	$meses = $_POST["meses"] ?? 1;



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
		<h1>Questão 10 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){

					//M = P * (1 + i) ^ n
					$total = $valor * ((1 + 0.025) ** $meses);
					$total = number_format($total,2);
					
					echo "<p class='alerta-vermelho'>o emprestimo do valor de R$ {$valor} em {$meses} meses a uma taxa de juros de 2.5% gera um montante de R$  {$total}</p>";

				}
			?>


            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>