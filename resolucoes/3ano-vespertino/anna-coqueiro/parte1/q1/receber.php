<?php
		$valor=$_GET["valor"];
		$desconto = $valor - ($valor*10/100);
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
<div class="container">
		<div class="box resposta">
			<h2>Desconto de 10%</h2>
			<?="O produto que custa {$valor} reais, com o desconto ficou {$desconto} reais." ?>
			<br>
            <a href="index.php" class="link">Voltar</a>
		</div>
</div>

</body>
</html>