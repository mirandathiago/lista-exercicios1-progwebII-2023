<?php
/*3- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
de 05 até 12h deve ser dado Bom dia
de 13h até 18h deve ser dado Boa Tarde
de 18h até 23h deve ser dado Boa Noite
de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.

*/
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
		<h1>NOME E HORA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Saudações!</h2>
			<form action="resposta.php" method="post">
				<label>Insira um nome:
					<input type="text" id="nome" name="nome" required>
				</label>

			

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>