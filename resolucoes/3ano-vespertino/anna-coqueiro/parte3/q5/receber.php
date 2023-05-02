<?php  
    $valor = $_GET["valor"];
	$valormensal = $_GET["valormensal"];
	$juros = $_GET["juros"];

	$meses = 0;

	while ($valor > 0) {
		$valor -= $valormensal;
		$valor += $valor * ($juros /100);
		$meses++;
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
	<div class="container">
		<div class="box resposta">
			<h2>Tempo para quitar dívida</h2>
            <?php 
                
                echo "<br>Em ".$meses." meses a dívida estará quitada <br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>