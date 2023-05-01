
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Fatorial</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $numero = $_GET['numero'];
            $fator = 1;

            if ($numero == 0) {
                echo "O Valor Fatorial de 0 é 1<br>";
            }
            else {
                for ($i = $numero; $i >= 1; $i--) { 
                    $fator = $fator * $i;
                }
                echo "O fatorial de $numero é $fator.<br>";
            }
            ?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>