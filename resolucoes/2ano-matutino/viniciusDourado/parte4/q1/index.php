<!-- 1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Escolha as Frutas</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Escolha as Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Frutas</h2>
			<form action="index.php" method="post">
			<div>
				<!-- name="frutas [] para salvar cada fruta selecionada em um vetor"-->
				<input type="checkbox" id="abacaxi" name="frutas[]" value="abacaxi">
				<label for="abacaxi">Abacaxi</label>
			</div>
			<div>
				<input type="checkbox" id="banana" name="frutas[]" value="banana">
				<label for="banana">Banana</label>
			</div>
			<div>
				<input type="checkbox" id="damasco" name="frutas[]" value="damasco">
				<label for="damasco">Damasco</label>
			</div>
			<div>
				<input type="checkbox" id="morango" name="frutas[]" value="morango">
				<label for="morango">Morango</label>
			</div>
			<div>
				<input type="checkbox" id="uva" name="frutas[]" value="uva">
				<label for="uva">Uva</label>
			</div>

				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Frutas que foram escolhidas</h2>
			<?php
			 $frutas = $_POST["frutas"] ?? [];
			  //foreach -> para cada elemento do array pegue um elemento de cada vez e coloque seu valor em uma variavel definida no comando.
			 foreach($frutas as $fruta){
				 echo"<h3>{$fruta}</h3>";
			 }
			?>
		</div>
	</div>
</body>
</html>