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
		<h1>Locais e Clima</h1>
	</header>
	<div class="container">
	    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $clima=$_POST["clima"];

            switch ($clima) {
                case 'ensolarado':
                    echo "O clima ensolarado é propício para ir ao clube !!<br></br>";
                    break;
                case 'ameno':
                    echo "O clima ameno é propício para ir ao parque !!!<br></br>";
                    break;
                case 'chuvoso':
                    echo "O clima chuvoso é propício para ir ao Cinema !!!<br></br>";
                    break;
                case 'nublado':
                    echo "O clima nublado é propício para ir ao Museu !!!<br></br>";
                    break;
                case 'tempestuoso':
                    echo "O clima tempestuoso é propício para ficar em casa !!!<br>";
                    break;
            }
        
            ?>
			
            <a href="clima.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>