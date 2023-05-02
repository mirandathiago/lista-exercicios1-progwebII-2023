<?php
/*
	9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. Considere as seguintes opções de locais:

	Ensolarado: Clube
	Ameno: Parque
	Chuvoso: Cinema
	Nublado: Museu
	Tempestuoso: Ficar em casa
	O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
	Entrada: Ensolarado
	Saída: Com o clima ensolarado, recomendamos ir ao Clube.
*/
	$clima = $_POST["clima"] ?? 0;
	switch ($clima) {
		case '1':
			$mensagem = "<p class='alerta-verde'>Clube</p>";
			break;
		case '2':
			$mensagem = "<p class='alerta-verde'>Parque</p>";
			break;
		case '3':
			$mensagem = "<p class='alerta-verde'>Cinema</p>";
			break;
		case '4':
			$mensagem = "<p class='alerta-verde'>Museu</p>";
			break;
		case '5':
			$mensagem = "<p class='alerta-vermelho'>Casa</p>";
			break;
		default:
			$mensagem = "";
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
		<h1>Questão 9 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha uma opção a seguir:</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Clima:
					<select name="clima">
						<option ></option>
						<option value="1"  <?php echo ($clima == '1') ? 'selected' : ''; ?>>Ensolarado</option>
						<option value="2"  <?php echo ($clima == '2') ? 'selected' : ''; ?>>Ameno</option>
						<option value="3"  <?php echo ($clima == '3') ? 'selected' : ''; ?>>Chuvoso</option>
						<option value="4"  <?php echo ($clima == '4') ? 'selected' : ''; ?>>Nublado</option>
						<option value="5"  <?php echo ($clima == '5') ? 'selected' : ''; ?>>Tempestuoso</option>

					</select>
			   </label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Lugar ideal: </p>
			<?=$mensagem?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>