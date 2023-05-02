<?php 

$preco = $_POST["preco"] ?? "0";
$calculo = $preco * 0.9;

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
		<h1>DESCONTO</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao1.php" method="post">
				
				<label>Valor:
					<input type="number" name="preco" value="<?=$preco?>" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           
		   <?php
			if($preco > 0){
            echo "<div class='item'>Preço com desconto: R$ {$calculo}";
			}?>
		</div>
	</div>
</body>
</html>