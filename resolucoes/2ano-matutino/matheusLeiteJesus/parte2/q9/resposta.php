<!--Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. Considere as seguintes opções de locais:

Ensolarado: Clube
Ameno: Parque
Chuvoso: Cinema
Nublado: Museu
Tempestuoso: Ficar em casa
O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
Entrada: Ensolarado
Saída: Com o clima ensolarado, recomendamos ir ao Clube.
-->

<?php
	$clima = $_GET["clima"] ?? 1;

	switch ($clima) {
		case 'ensolarado':
			$local = "clube";
			break;
		case 'ameno':
			$local = "parque";
			break;
		case 'chuvoso':
			$local = "cinema";
			break;
		case 'nublado':
			$local = "museu";
			break;
		case 'tempestuoso':
			$local = "casa";
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
		<h1>Formulário de Clima</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<!-- <p>A resposta será exibida aqui.</p> -->
			<!-- <p class="alerta-vermelho">Mensagem de alerta aqui</p> -->
			<p class="alerta-verde">Com o clima <?=$clima?>, recomendamos ir para o(a) <?=$local?>.</p>
			<!-- <p class="alerta-amarelo">Mensagem de alerta aqui</p> -->
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>