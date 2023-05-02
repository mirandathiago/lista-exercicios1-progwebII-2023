<?php
	$n1 = $_GET["n1"] ?? 6;
	$n2 = $_GET["n2"] ?? 6;
	$n3 = $_GET["n3"] ?? 6;
	
	$somanotas = (2*$n1) + (3*$n2) + (5*$n3);
	$media = $somanotas/10;

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
		<h1>Média do aluno:</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Média Final</h2>
			<?php
				if($media>=6){
					echo "<p class='alerta-verde'>A média do aluno foi {$media}</p>";
					echo "<h1 class='alerta-verde'>Aluno aprovado!</h1>";
				}else{
					echo "<p class='alerta-vermelho'>A média do aluno foi {$media}</p>";
					echo "<h1 class='alerta-vermelho'>Aluno reprovado!</h1>";
				}
				
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>