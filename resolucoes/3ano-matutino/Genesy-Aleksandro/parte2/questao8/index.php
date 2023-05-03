<?php

$peso = $_POST["peso"];
$altura = $_POST["altura"];


$imc = $peso / ($altura^2);
if($imc < 18.5){
 $mens = "abaixo do peso";
}else if($imc > 18.5 && $imc <= 24.9 ){
    $mens = "peso normal";
}else if($imc > 24.9 && $imc <=29.9 ){
    $mens = "sobrepeso";
}else if($imc >29.9 && $imc <=34.9){
    $mens = "obesidade grau 1";
}else if($imc >34.9 && $imc <=39.9){
    $mens = "obesidade grau 2";
}else{
    $mens = "obesidade grau 3";
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
		<h1>atividade 8 da parte 2</h1>
	</header>
	<div class="container">
		<div class="box resposta">
		<form action="index.php"method="post">
    <label>Altura:
    <input type="number"  name="altura" step="any" required>
    </label>
    <label>Peso:
    <input type="number"  name="peso" required>
    </label>
    <button>Enviar</button>

    <h2>
    Resultado do imc:
</h2>

<h3>
    O seu imc mostra: <?=number_format($imc, 2, ',', '.');?>
</h3>
<h3>
    <?="{$mens}"?>
</h3>
		


  </form>


            
		</div>
	</div>
</body>
</html>