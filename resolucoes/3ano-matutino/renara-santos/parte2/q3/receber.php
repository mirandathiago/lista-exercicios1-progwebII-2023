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
		<h1>Saudação</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resultado</h2>
            <?php
            $horas = date("H");
            $nome = $_POST["nome"];

            if($horas >= 5 && $horas <= 12){
                echo "Bom Dia $nome!<br>";
            }
            if($horas >= 13 && $horas <= 17){
                echo "Boa Tarde $nome!<br>";
            } 
            if($horas >= 18 && $horas <= 23){
                echo "Boa Noite $nome!<br>";
            } 
             if($horas >= 00 && $horas <= 4){
                echo "$nome, vá Dormir, está de Madrugada!<br>";
            } 
            
            
        
            ?>
			
            <a href="saudacao.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>