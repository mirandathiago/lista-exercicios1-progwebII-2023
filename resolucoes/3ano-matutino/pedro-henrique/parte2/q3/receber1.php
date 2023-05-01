<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Olá</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $hora = date("H");
            $nome = $_GET["nome"];

            if($hora >= 5 && $hora <= 12){
                echo "Bom Dia $nome!<br>";
            }
            if($hora >= 13 && $hora <= 17){
                echo "Boa Tarde $nome!<br>";
            } 
            if($hora >= 18 && $hora <= 23){
                echo "Boa Noite $nome!<br>";
            } 
             if($hora >= 00 && $hora <= 4){
                echo "$nome, vá Dormir, está de Madrugada!<br>";
            } 
            
            
        
            ?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>