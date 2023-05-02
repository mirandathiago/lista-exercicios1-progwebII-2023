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
		<h1>Tabuada de um número</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $numero = $_POST['numero'];
            $i = 1;
            while ($i <= 10) {
                $multiplicacao = $numero * $i;
                echo $numero." x ". $i ." = ". $multiplicacao."<br>";
            $i++;
            }

            ?>
			
			<a href="tabuada.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>