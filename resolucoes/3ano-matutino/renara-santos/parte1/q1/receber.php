<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Loja da Nara</h1>
	</header>
		<div class="box resposta">
			<h2>Resposta</h2>
			
            <?php
			$valorcomp = $_POST['preco'] ?? 0 ;
			$valorcomdesc =$valorcomp - ($valorcomp * 0.1);  

			echo "O preço do produto é R$ $valorcomdesc<br>";

			?>
			<a href="loja.php" class="link">Voltar</a>
		</div>
</body>
</html>