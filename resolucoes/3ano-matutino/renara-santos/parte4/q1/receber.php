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
		<h1>Frutas Favoritas</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $frutas=$_POST['frutas'];
            if ($frutas) {
                foreach ($frutas as $fruta) {
                    echo $fruta."<br>";
                }
            }
            ?>
			<a href="fruta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>         

