<!-- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. (Devem existir ao menos 5 frutas para serem escolhidas). Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
        <form action="receber1.php" method="get">
		<h2>Dentre as frutas marque as suas favoritas! </h2>
        <input type="checkbox" name="frutas[]" value="laranja">Laranja<br>
        <input type="checkbox" name="frutas[]" value="abacate">Abacate<br>
        <input type="checkbox" name="frutas[]" value="acerola">Acerola<br>
        <input type="checkbox" name="frutas[]" value="caju">Caju<br>
        <input type="checkbox" name="frutas[]" value="uva">Uva<br>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>