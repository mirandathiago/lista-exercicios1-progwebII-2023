<?php

	$valor = $_POST["valor"] ?? "";
	$parcelamento = $_POST["parcelamento"] ?? "";


	



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
		<h1>Questão 8 - Parte 1</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>8-Maria precisa calcular o valor total que ela irá pagar pela compra de um celular no cartão na loja Magazine PHP. Para ajudá-la, crie um formulário que receba o valor do celular e em quantas vezes o produto será dividido, podendo ser de 0 a 12x, sendo que 0 seria a compra à vista. Sabendo que a loja Magazine PHP utiliza juros simples em sua cobrança e cobra 4% de juros a cada mês, crie um programa em PHP que receba os dados do formulário e calcule o valor total a ser pago por Maria.</h2>
			
			<form action="index.php" method="post">
				<label>Valor:
					<input type="number" id="valor" name="valor" step="0.1" required value="<?=$valor?>">
				</label>

				<label>Parcelamento:
					<select name="parcelamento">
						<option></option>
						<option value="0" <?=$parcelamento == 0 ? "SELECTED" : "" ?>>A Vista</option>
						<option value="1" <?=$parcelamento == 1 ? "SELECTED" : "" ?>>1x</option>
						<option value="2" <?=$parcelamento == 2 ? "SELECTED" : "" ?>>2x</option>
						<option value="3" <?=$parcelamento == 3 ? "SELECTED" : "" ?>>3x</option>
						<option value="4" <?=$parcelamento == 4 ? "SELECTED" : "" ?>>4x</option>
						<option value="5" <?=$parcelamento == 5 ? "SELECTED" : "" ?>>5x</option>
						<option value="6" <?=$parcelamento == 6 ? "SELECTED" : "" ?>>6x</option>
						<option value="7" <?=$parcelamento == 7 ? "SELECTED" : "" ?>>7x</option>
						<option value="8" <?=$parcelamento == 8 ? "SELECTED" : "" ?>>8x</option>
						<option value="9" <?=$parcelamento == 9 ? "SELECTED" : "" ?>>9x</option>
						<option value="10" <?=$parcelamento == 10 ? "SELECTED" : "" ?>>10x</option>
						<option value="11" <?=$parcelamento == 11 ? "SELECTED" : "" ?>>11x</option>
						<option value="12" <?=$parcelamento == 12 ? "SELECTED" : "" ?>>12x</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php 
				if($_SERVER["REQUEST_METHOD"] == "POST"){ 
					$valorapagar = $valor + (($valor * 0.04) * $parcelamento);
			?>
				<p class="alerta-verde">O Produto a ser comprado tem o valor de R$<?=$valor?> e parcelando em <?=$parcelamento?> vezes ficou em R$<?=$valorapagar?> </p>
			<?php } ?>
            
		</div>
	</div>
</body>
</html>