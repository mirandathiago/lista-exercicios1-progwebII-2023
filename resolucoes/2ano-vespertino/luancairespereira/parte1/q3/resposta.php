<?php
//a primeira prova tem peso 2, a segunda prova tem peso 3 e a terceira prova tem peso 5.
	$nota1 = $_POST["n1"] ?? 0;
	$nota2 = $_POST["n2"] ?? 0;
	$nota3 = $_POST["n3"] ?? 0;
	//pesos das avaliações
	$p1 = 2;
	$p2 = 3;
	$p3 = 5;
	//fórmula da média ponderada
	// mp = p1*n1 + p2*n2 + p3*n3/p1+p2+p3
	$mp= ($p1 * $nota1 + $p2 * $nota2 + $p3 * $nota3) /($p1 + $p2 + $p3);
	$mensagem = "As notas<br> {$nota1}<br> {$nota2}<br>  {$nota3}<br> resultaram em uma média de: {$mp}";
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
			<h2>Resultado da Média</h2>
			<?php/*A criação do bloco php com uma estrutura de condição é para mostrar a resposta com cores diferentes para cada configuração desejada*/ if($mp > 6){?>
				<p class="alerta-verde"> <?=$mensagem?></p>
			<?php }elseif($mp == 6){ ?>
				<p class="alerta-verde"> <?=$mensagem?></p>
			<?php }else{ ?> 
			<p class="alerta-vermelho"> <?=$mensagem?></p>
            <?php } ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>