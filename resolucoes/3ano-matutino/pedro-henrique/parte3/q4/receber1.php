<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Soma Numero</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $numero = $_GET['numero'];
            $soma = 0;

            for ($i = 1; $i <= $numero; $i++) {
                $soma += $i;
            }
            echo "A soma dos valores de 1 até $numero foi $soma<br>";

            ?>
			
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>