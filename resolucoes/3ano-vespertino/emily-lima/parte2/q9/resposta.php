<?php
  $nome = $_GET["nome"] ?? " ";
  $clima = $_POST["clima"] ?? "";
  

  switch($clima){
	case "ensolarado":
	echo "<p>Vá ao Clube!</p>";
  break;

	case "ameno":
	echo "<p>Vá ao Parque!</p>";
  break;

  case "chuvoso":
	echo "<p>Vá ao Cinema!</p>";
  break;

  case "nublado":
	echo "<p>Vá ao Museu!</p>";
  break;

  case "tempestuoso":
	echo "<p>Relaxe, Fique em casa!</p>";
  break;
  default;
  
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<p>Com o clima <?=$clima?> </p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>