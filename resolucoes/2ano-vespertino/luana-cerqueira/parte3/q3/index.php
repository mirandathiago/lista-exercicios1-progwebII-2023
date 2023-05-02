<?php
	$inicio = $_POST["inicio"] ?? "";
	$fim = $_POST["fim"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Cálculo de números pares no intervalo</h2>
			<form action="index.php" method="post">
				<label>Início do Intervalo:
					<input value="<?=$inicio?>" type="number" id="inicio" name="inicio" required>
				</label>
				<label>Fim do Intervalo:
					<input value="<?=$fim?>" type="number" id="fim" name="fim" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$method = $_SERVER["REQUEST_METHOD"];
				$pares = 0;
				$impar = 0;
				if($method == "POST"){
						for($i = $inicio; $i <= $fim; $i++){
							if($i % 2 == 0){
								$pares = $pares + 1;
							}
						}
						echo "<p>Quantidade de números pares no intervalo de {$inicio} a {$fim}: <strong>{$pares}</strong></p>";
				}else{
					echo "<p>Aguardando envio do formulário.</p>";
				}

			?>
		</div>
	</div>
</body>
</html>