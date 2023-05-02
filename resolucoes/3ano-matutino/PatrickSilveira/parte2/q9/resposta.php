<?php
    /*
    9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. 
	Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções 
	de clima: 
		ensolarado, ameno, chuvoso, nublado, tempestuoso. 
	Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado 
	para cada opção de clima escolhida por João. 
	Considere as seguintes opções de locais:

		Ensolarado: Clube
		Ameno: Parque
		Chuvoso: Cinema
		Nublado: Museu
		Tempestuoso: Ficar em casa

	O formulário deve permitir a seleção de uma das opções de clima através de um campo select, 
	e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
		Entrada: Ensolarado
		Saída: Com o clima ensolarado, recomendamos ir ao Clube.


    */

    $clima = $_POST["clima"] ;

	switch($clima){
		case"1":
			$mensagem ="Com o clima ensolarado, recomendamos ir ao Clube.";
		break;
		case"2":
			$mensagem ="Com o clima ameno, recomendamos ir ao Parque.";
		break;
		case"3":
			$mensagem ="Com o clima chuvoso, recomendamos ir ao Cinema.";
		break;
		case"4":
			$mensagem ="Com o clima nublado, recomendamos ir ao Museu.";
		break;
		case"5":
			$mensagem ="Com o clima tempestuoso, recomendamos ficar em casa.";
		break;
		default:
			$mensagem = "Escolha uma das opções";
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
		<h1>Sugestor de Passeio</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2><?="{$mensagem}"?></h2>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>