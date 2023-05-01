<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>LOJINHA DO SEU NELSON</h1>
	</header>
		<div class="box resposta">
			<h2>Resposta</h2>
			
            <?php
			$valortotal = $_GET['preco'] ?? 0 ;
			$valordescontado =$valortotal - ($valortotal * 0.1);  

			echo "O preço do produto é R$ $valordescontado<br>";

			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
</body>
</html>