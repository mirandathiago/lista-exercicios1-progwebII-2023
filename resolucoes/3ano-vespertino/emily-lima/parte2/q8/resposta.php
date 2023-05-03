<?php
/*abaixo do peso (IMC menor que 18,5)
peso normal (IMC entre 18,5 e 24,9),
sobrepeso (IMC entre 25 e 29,9),
obesidade grau 1 (IMC entre 30 e 34,9),
obesidade grau 2 (IMC entre 35 e 39,9) 
e obesidade grau 3 (IMC igual ou maior que 40) */
 
  $altura = $_POST["altura"] ?? 1.60;
  $peso = $_POST["peso"] ?? "55kg";

  $IMC = $peso / ($altura^2);

  if($IMC <= 18.5){
	$mensagem = "<p>Você está abaixo do peso</p>";
  }else if($IMC >= 18.5 && $IMC <= 24.9){
	$mensagem = "<p>Sua faixa de Peso está Normal</p>";
  }else if($IMC >= 25 && $IMC <= 29.9){
	$mensagem = "<p>Sua faixa é de Sobrepeso</p>";
  }else if($IMC >= 30 && $IMC <= 34.9){
	$mensagem = "<p>Sua faixa de peso é Obesidade grau1</p>";
  }else if($IMC >= 35 && $IMC <= 39.9){
	$mensagem = "<p>Sua faixa de peso é Obesidade grau2</p>";
  }else{
	$mensagem = "<p>Sua faixa de peso é Obesidade grau3</p>";
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
			<p class="alerta-verde">O seu IMC é de <?=$IMC?>
			<?=$mensagem?> </p>
			<h3><?="{$peso} ÷ {$altura}<sup>2</sup> = {$IMC}"?></h3>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>