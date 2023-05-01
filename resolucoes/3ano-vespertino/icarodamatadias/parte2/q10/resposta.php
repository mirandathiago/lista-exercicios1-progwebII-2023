<?php  
    $semana = $_GET["semana"];

	switch ($semana) {
		case '1':
			$mensagem = "Domingo não é um dia util";
			break;
		case '2':
			$mensagem = "Segunda é um dia util";
			break;
		case '3':
			$mensagem = "Terça é um dia util";
			break;
		case '4':
			$mensagem = "Quarta é um dia util";
			break;
		case '5':
			$mensagem = "Quinta é um dia util";
			break;
		case '6':
			$mensagem = "Sexta é um dia util";
			break;
		case '7':
			$mensagem = "Sábado é um dia util";
			break;
		default:
			$mensagem = "Dia inesistente";

			break;
		
	}

    
?>

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
		
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                
                echo "<br> ". $mensagem. "<br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>