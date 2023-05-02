<?php

	/*3- Crie um formulário que solicite o nome de uma pessoa e ao ser enviado faça uma saudação a esta pessoa dando bom dia, boa tarde ou boa noite de acordo com o horário do dia em que o programa está sendo executado.
	Para saber a hora do dia você poderá utilizar a função date do PHP passando como parâmetro a string “H” que retorna a hora atual no formato 24 horas. 
	de 05 até 12h deve ser dado Bom dia
	de 13h até 18h deve ser dado Boa Tarde
	de 18h até 23h deve ser dado Boa Noite
	de 00h até 04h deve ser exibida a mensagem: Vá Dormir, está de Madrugada.
	Entrada: João
	Saída: Bom dia, João!
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
		<h1>Formulário de Horário do dia</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Saudação</h2>

			<form action="resposta.php" method="post">
				
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

			
				<button name="enviar"> Enviar </button>

			</form>

		</div>

		<div class="box resposta">

			<h2>Resposta</h2>

			<?php
		 
		
		date_default_timezone_set('America/Sao_Paulo');
		$hora = date('H:i:s', time());
		$nome = $_POST["nome"];

		 if($hora >= date('05:00:00', time()) && $hora <= date('12:59:59', time())){

			echo "Bom dia";

		}else if($hora >= date('13:00:00', time()) && $hora <= date('18:00:00', time())){

			echo "Boa tarde";

		}else if($hora > date('18:00:00', time()) && $hora <= date('23:59:59', time())){

			echo "Boa noite";

		}else{

			echo "Vai dormir, esta de madrugada";

		}

		echo $nome;
		
		
		?>

		</div>		
	</div>

</body>
</html>