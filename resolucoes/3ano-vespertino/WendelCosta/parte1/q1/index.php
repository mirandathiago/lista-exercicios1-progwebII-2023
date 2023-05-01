<?php
/* 
	1- Pedro precisa calcular o preço de um produto com um desconto de 10%. Crie um formulário que receba o preço original do produto e calcule o preço final com o desconto aplicado.
	Entrada: Preço original: R$ 50,00
	Saída: Preço com desconto: R$ 45,00
*/


    $preco_original = $_POST["preco_original"] ?? 0;
	
	$preco_final = $preco_original - ($preco_original * 0.1);


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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cálculo do Preço</h2>
			<form action="index.php" method="post">
                <label>
                    Preço Original:
                        <input type="number" id="preco_original" name="preco_original" required >
                </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Cálculo do Preço</h2>
			<p>O preço final do produto é: <?= $preco_final?></p>
		</div>
	</div>
</body>
</html>