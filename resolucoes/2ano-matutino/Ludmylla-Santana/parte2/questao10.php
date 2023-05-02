<?php

$dia = $_POST["dia"];

switch ($dia) {
	case 1:
	$mens = "A segunda-feira é um dia útil.";
	break;
	case 2:
	$mens = "A terça-feira é um dia útil.";
	break;
	case 3:
	$mens = "A quarta-feira é um dia útil.";
	break;
	case 4:
	$mens = "A quinta-feira é um dia útil.";
	break;
	case 5:
	$mens = "A sexta-feira é um dia útil.";
	break;
	case 6:
	$mens = "fim de semana";
	break;
	case 7:
	$mens = "fim de semana";
	break;
	default:
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
		<h1>atividade 10 da parte 2</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<form action="questao10.php"method="post">
		<label for="dia">escolha um dia da semana:</label>
  <select id="dia" name="dia">
    <option value="1">domingo</option>
    <option value="2">segunda</option>
    <option value="3">terça</option>
    <option value="4">quarta</option>
	<option value="5">quinta</option>
	<option value="6">sexta</option>
	<option value="7">sabado</option>
	<input type="submit" value="Enviar">




	<h2>
    Dias da semana :
	<br>
</h2>

<h3>
	<br>
     o dia da semana é:
</h3>
<h3>
<?="{$mens}"?>
</h3>
  </form>


            
		</div>
	</div>
</body>
</html>