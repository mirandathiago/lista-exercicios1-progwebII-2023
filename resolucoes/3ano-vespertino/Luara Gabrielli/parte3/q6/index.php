<?php
/*A fábrica "Produtos Incríveis" precisa de uma solução para registrar o tempo de duração de sua produção,
 desde o início até o término. Esses eventos podem ter uma duração muito longa, medida em segundos, 
 o que torna difícil a visualização do tempo total de produção. Para isso, será necessário criar um
  formulário que permita ao usuário digitar o tempo de duração em segundos de um determinado evento
   e, em seguida, converter esse tempo em horas, minutos e segundos. Utilize uma estrutura de repetição 
   para fazer a conversão.


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
		<h1>CONVERSÃO SEGUNDOS</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Converta aqui</h2>
			<form action="resposta.php" method="post">
				<label>Insira os segundos:
					<input type="number" step="1" name="segundos" required>
				</label>

			
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>