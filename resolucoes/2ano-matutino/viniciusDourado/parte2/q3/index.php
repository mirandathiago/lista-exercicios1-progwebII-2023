<!--
3- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
Entrada: João
Saída: Bom dia, João!
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Saudações</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Saudações</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Saudações</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
			$nome = $_POST["nome"];
			date_default_timezone_set('America/Bahia'); // função que define um fusorario de um local, onde utilizei bahia
			$hora = date('H');
			//funçao que pega a Hora do sistema
			//testa que hora do dai está e deseja bom dia ou boa tarde ou boa noite
			if($hora >= 5 && $hora <= 12){
				echo "<p>Bom dia, {$nome}!";
			}else if($hora >= 13 && $hora <= 18){
				echo "<p>Boa tarde, {$nome}!";
			}else if($hora > 18 && $hora <= 23){
				echo "<p>Boa noite, {$nome}!";
			}else{
				echo "<p>Vá Dormir {$nome}, está de Madrugada!";
			}
		
			}
			?>
		</div>
	</div>
</body>
</html>