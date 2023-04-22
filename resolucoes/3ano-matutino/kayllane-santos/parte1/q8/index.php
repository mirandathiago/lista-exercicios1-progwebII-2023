<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>MAGAZINE PHP</h1>
	</header>
	<div class="container">

		<!-- Maria precisa calcular o valor total que ela irá pagar pela compra de um celular no cartão na loja Magazine PHP. Para ajudá-la, crie um formulário que receba o valor do celular e em quantas vezes o produto será dividido, podendo ser de 0 a 12x, sendo que 0 seria a compra à vista. -->

		<div class="box formulario">
			<h2>Preencha os dados</h2>
			<form action="resposta.php" method="POST">
				<label>Valor do celular:
					<input type="number" id="valor" name="valor" step="0.1" required>
				</label>

				<label>Deseja dividir em quantas vezes:
					<select name="vezes">
						<option value="">Selecione...</option>
						<option value="1">0x</option>
						<option value="2">2x</option>
						<option value="3">3x</option>
						<option value="4">4x</option>
						<option value="5">5x</option>
						<option value="6">6x</option>
						<option value="7">7x</option>
						<option value="8">8x</option>
						<option value="9">9x</option>
						<option value="10">10x</option>
						<option value="11">11x</option>
						<option value="12">12x</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>