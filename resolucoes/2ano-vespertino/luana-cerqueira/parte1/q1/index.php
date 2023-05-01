<?php
	$preco = $_POST["preco"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo de Desconto</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cálculo</h2>
			<form action="index.php" method="post">
				<label>Preço original do produto:
					<input value="<?=$preco?>" type="number" step="0.01" min="0" valueid="preco" name="preco" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
		<h2>Preço com Desconto</h2>
		<?php
			$method = $_SERVER["REQUEST_METHOD"];

			if($method == "POST"){
				$preco_desconto = $preco - ($preco * 0.1);
				$preco_desconto = number_format($preco_desconto,2,',','.');
				echo "<p>O preço do produto com o desconto de 10% é <strong>R$ {$preco_desconto}</strong>.</p>";
			}else{
				echo "<p>Aguardando envio do formulário.</p>";
			}
		?>
		</div>
	</div>
</body>
</html>