<?php  
    $opcao =$_GET["opcao"];

	switch ($opcao) {
		case 'E':
			$mensagem = "O clima está bom para ir ao clube";
			break;
		
		case 'A':
			$mensagem = "O clima está bom para ir ao parque";
			break;
		case 'C':
			$mensagem = "O clima está bom para ir ao cinema";
			break;
		case 'N':
			$mensagem = "O clima está bom para ir ao museu";
			break;
		case 'T':
			$mensagem = "O clima está bom para ficar quietimho em casa, sossegue";
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