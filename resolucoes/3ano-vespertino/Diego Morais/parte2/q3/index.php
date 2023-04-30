<?php
$nome = $_POST["nome"] ?? "";

 date_default_timezone_set('America/Sao_Paulo'); //função de fuso horario
 $hora = date("H");

if($hora >= 05 && $hora <= 12){
    $saldacao = "Bom dia, $nome";
}
else if($hora >= 13 && $hora <= 18){
    $saldacao = "Boa tarde, $nome";
}

else if($hora >=18 && $hora <= 23){
     $saldacao = "Boa noite, $nome";
}

else if($hora >= 00 && $hora <= 4){
     $saldacao = "$nome, Vá Dormir, está de Madrugada";
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
		<h1>Lista parte-2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-03</h2>
			<form method="post" action="index.php">
				<label>Digite seu nome:
					<input type="text" name="nome"  required >
				</label>
				
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
          <h2><?=$saldacao?></h2>
			
		</div>
	</div>
</body>
</html>