<?php  
    $populacaoA = $_GET["populacaoA"];
	$taxaA = $_GET["taxaA"];

	$taxaA /= 100;
	
	$populacaoB = $_GET["populacaoB"];
	$taxaB = $_GET["taxaB"];

	$taxaB /= 100;

	$anos = 0;

	while ($populacaoA < $populacaoB) {

		$populacaoA += $populacaoA * $taxaA;
		$populacaoB += $populacaoB * $taxaB;

		$anos++;
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
                
                echo "<br>Serão nescessários ". $anos. " anos para a cidade A ultrapassar a cidade B<br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>