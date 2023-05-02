 <?php
	$iniciointervalo = $_POST["iniciointervalo"] ?? 3;
	$fimintervalo = $_POST["fimintervalo"] ?? 15;

	$contadorpares = 0;
	for($i=$iniciointervalo;$i<=$fimintervalo;$i++){
		if($i%2 == 0){
			$contadorpares += 1; // O mesmo que: $contadorpares = $contadorpares + 1;
		}
	}

	$status = "Quantidade de números pares: " . $contadorpares;
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
		<h1>Calculadora de Números Pares</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Formulário de Números Pares</h2>
			<p><?=$status?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>