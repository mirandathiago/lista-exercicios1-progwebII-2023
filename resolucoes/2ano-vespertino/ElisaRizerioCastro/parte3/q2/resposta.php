<?php
//criação das variáveis
	$n1 = $_POST["n1"];
	$i=1;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para execução de uma tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada</h2>
			<?php
			while ($i <= 10) {//estrutura de repetição para ir multiplicando os números da tabuada
				$resultado = $n1 * $i;
				echo "<h3>{$n1} x {$i} = {$resultado}</h3>";
				$i++;
			}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>