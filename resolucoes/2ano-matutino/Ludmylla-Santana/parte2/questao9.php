<?php

$clima = $_POST["clima"];


switch ($clima) {
	case 'ensolarado':
		$mens = "O local mais apropriado é o clube.";
		break;
	case 'ameno':
		$mens = "O local mais apropriado é o parque.";
		break;
	case 'chuvoso':
		$mens = "O local mais apropriado é o cinema.";
		break;
	case 'nublado':
		$mens = "O local mais apropriado é o museu.";
		break;
	case 'tempestuoso':
		$mens = "O local mais apropriado é ficar em casa.";
		break;
	default:
	$mens = "Selecione um clima válido.";
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
		<h1>atividade 9 da parte 2</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<form action="questao9.php"method="post">
		<label for="clima">Como está o clima hoje:</label>
  <select id="clima" name="clima">
    <option value="ensolarado">ensolarado</option>
    <option value="ameno">ameno</option>
    <option value="chuvoso">chuvoso</option>
    <option value="nublado">nublado</option>
	<option value="tempestuoso">tempestuoso</option>
	<input type="submit" value="Enviar">

	<h2>
    Resultado do clima :
	<br>
</h2>

<h3>
	<br>
    o mais recomendado é:
</h3>
<h3>
	<?="{$mens}"?>
</h3>

  </form>


            
		</div>
	</div>
</body>
</html>