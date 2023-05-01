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
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php

			 $frutas = $_GET["frutas"] ?? [];
	 
			 foreach($frutas as $fruta){
				 echo "<h3> {$fruta} </h3";
			 }
            ?>
	</div>
	</div>
</body>
</html>