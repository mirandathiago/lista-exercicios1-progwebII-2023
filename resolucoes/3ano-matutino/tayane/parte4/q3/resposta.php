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
		<h1>Formulário de Pizza</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>

			<?php

			if(isset($_POST["sabores"])){
				echo "Sabores escolhidos: ";
				foreach($sabores as $sabores){
					echo "<li>{$sabores}</li>";
				}
			}else{
				echo "<p class='alerta-vermelho'>Você não selecionou nenhum sabor, refaça seu pedido</p>";
			}
			?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>