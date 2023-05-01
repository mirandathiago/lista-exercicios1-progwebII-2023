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
		<h1>Numero de Pares</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $comeco = $_POST['comeco'];
            $fim = $_POST['fim'];
            $pares = 0;
            for ($i = $comeco; $i <= $fim; $i++) {
                if ($i % 2 == 0) {
                    $pares++;
                }
            }
            echo "A Quantidade de números pares foi:$pares<br>";

            ?>
			
            <a href="pares.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>