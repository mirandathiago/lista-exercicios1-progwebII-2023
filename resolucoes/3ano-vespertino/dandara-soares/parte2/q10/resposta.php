<?php  
    $semana = $_GET["semana"];

	switch ($semana) {
		case '1':
			$msg = "Domingo não é um dia util";
			break;
		case '2':
			$msg = "Segunda é um dia util";
			break;
		case '3':
			$msg = "Terça é um dia util";
			break;
		case '4':
			$msg = "Quarta é um dia util";
			break;
		case '5':
			$msg = "Quinta é um dia util";
			break;
		case '6':
			$msg = "Sexta é um dia util";
			break;
		case '7':
			$msg = "Sábado é um dia util";
			break;
		default:
			$msg = "Não existe";

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
			<h2>Resultado do dia selecionado</h2>
            <?php 
                
                echo "<p> {$mensagem} </p>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>