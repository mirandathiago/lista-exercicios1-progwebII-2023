<?php
	$num1 = $_POST["num1"] ?? "";
	$num2 = $_POST["num2"] ?? "";
	$num3 = $_POST["num3"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Menor e Maior</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post">
				<label>Número 1:
					<input value="<?=$num1?>" type="number" id="num1" name="num1" required>
				</label>

				<label>Número 2:
					<input value="<?=$num2?>" type="number" id="num2" name="num2" required>
				</label>

				<label>Número 3:
					<input value="<?=$num3?>" type="number" id="num3" name="num3" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$method = $_SERVER["REQUEST_METHOD"];

			if($method == "POST"){

				//Vendo qual o menor
				if($num1 < $num2){
					if($num1 < $num3){
						$menor = $num1;
					}else{
						$menor = $num3;
					}
				}else{
						if($num2 < $num3){
							$menor = $num2;
						}else{
							$menor = $num3;
						}
					}

				//Vendo qual o maior
				if($num1 > $num2){
					if($num1 > $num3){
						$maior = $num1;
					}else{
						$maior = $num3;
					}
				}else{
					if($num2 > $num3){
						$maior = $num2;
					}else{
						$maior = $num3;
					}
				}

				echo "<p>Menor número: {$menor}</p>";
				echo "<p>Maior número: {$maior}</p>";

			}else{
				echo "<p>Aguardando envio do formulário.</p>";
			}
			?>
		</div>
	</div>
</body>
</html>