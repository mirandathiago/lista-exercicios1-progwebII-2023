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
		<h1> CONTAGEM</h1>
	</header>
	<div class="container">
		<div class="box">
        <?php
            $valor = $_POST["valor"] ?? 0;
			$soma = 0;

            for($i = 1; $i <= $valor; $i++){
                $soma = $soma + $i;
            }      
            echo "A soma de 1 até {$valor} é $soma";


        ?>
		</div>
	</div>
</body>
</html>
