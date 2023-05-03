<?php
  $precoOriginal = $_GET["precoOriginal"] ?? 50;
  $precoFinal = $_GET["precoFinal"] ?? 45;

  $dezporcento = $precoOriginal * 1.1;
  // 50 * 0.1 = 5 => 50 * 1 = 50 => 50 + 5 = 55

  $precoFinal = $precoOriginal - 5;

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
			<p class="alerta-verde">O preço Original é de R$ <?=$precoOriginal?> reais.</p>
			<p class="alerta-vermelho">O preço final com o desconto é de R$ <?=$precoFinal?> reais.</p>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>