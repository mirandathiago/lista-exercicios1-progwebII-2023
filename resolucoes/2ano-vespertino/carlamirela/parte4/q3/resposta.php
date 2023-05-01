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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php
	if(isset($_POST['submit'])) {
	$sabores = $_POST['sabores'];
	if(!empty($sabores)) {
		echo "Você selecionou os seguintes sabores de pizza: <br-->";
	foreach($sabores as $sabor) {
		echo $sabor . "<br>";
	}
	} else {
		echo "Por favor, selecione pelo menos um sabor de pizza.";
	}
	}
	?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>