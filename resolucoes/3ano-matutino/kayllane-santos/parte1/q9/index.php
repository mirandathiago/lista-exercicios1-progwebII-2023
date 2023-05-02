<?php
	// Em seguida, crie um código em PHP que calcule o valor em dólar correspondente e exiba na tela.
	$valoremreal = $_POST["valorreal"] ?? 1;
	$cotacao = $_POST["cotacao"] ?? 1;
	
	$valoremdolar = $valoremreal/$cotacao;

?>
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
		<h1>Conversor de Real para Dólar</h1>
	</header>
	<div class="container">
		<!-- João está planejando uma viagem para o exterior e precisa converter o valor do real para dólar. Crie um formulário que receba o valor em real e a cotação do dólar em reais. -->
		<div class="box formulario">
		<h2>Preencha</h2>
			<form action="index.php" method="POST">
				<label>Valor em Real:
					<input type="number" name="valorreal" value="<?=$valoremreal?>" step="0.1" required>
				</label>
				<label>Cotação atual do dólar(em reais):
					<input type="number" name="cotacao" value="<?=$cotacao?>" step="0.1" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>

		</div>	
		
		<div class="box resposta">
			<h2>Valor em Dólar: </h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){
					echo "<p class='alerta-azul'>" . number_format($valoremdolar, 2) . " US$</p>";
				}else{
					echo "<p>Aguardando a Operação</p>";
				}
			?>
            
		</div>
	</div>
</body>
</html>