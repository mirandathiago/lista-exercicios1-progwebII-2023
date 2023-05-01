<?php
/*

9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. 
Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções 
de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle 
switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por João. 
Considere as seguintes opções de locais:

Ensolarado: Clube
Ameno: Parque
Chuvoso: Cinema
Nublado: Museu
Tempestuoso: Ficar em casa
O formulário deve permitir a seleção de uma das opções de clima através de um campo select, e o 
resultado deve indicar qual o local mais apropriado para sair de acordo com o clima selecionado.
Entrada: Ensolarado
Saída: Com o clima ensolarado, recomendamos ir ao Clube.




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
		
	</header>
	<div class="container">
		<div class="box formulario">

			<form action="resposta.php" method="get">

				
				<label> Ensolarado
					<input type="radio" name="opcao"  value = 'E'>
				</label>
				
				<label> Ameno
					<input type="radio" name="opcao"  value = 'A'>
				</label>

				<label> Chuvoso
					<input type="radio" name="opcao"  value = 'C'>
				</label>

				<label> Nublado
					<input type="radio" name="opcao"  value = 'N'>
				</label>

				<label> Tempestuoso
					<input type="radio" name="opcao"  value = 'T'>
				</label>
				<br><br>
				


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>