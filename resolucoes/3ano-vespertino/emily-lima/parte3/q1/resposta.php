<?php

$num = $_GET["num"] ?? 0;
$calcular = 1;

if($num == 0){
	echo "1";
}else{
	for($a = $num; $a > 0; $a--){
		$calcular  *= $a;
	}
}

//echo " = {$calcular}";

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-verde">O fatorial é <?=$calcular?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>