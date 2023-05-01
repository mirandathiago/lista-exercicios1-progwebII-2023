<?php
	$consumo = $_POST["consumo"] ?? 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Conta de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="index.php" method="post">
				<label>Consumo de Energia:
					<input type="number" id="number" name="consumo" step="0.01" min="0"  required value="<?=$consumo?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Média</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){
					echo "<h3> Valor total a ser pago: </h3>";
					if($consumo > 40 && $consumo <= 100){
						$valor = $consumo * 0.5;
						echo "R$$valor<br>";
					}else if($consumo >100 && $consumo <= 200){
						$valor = $consumo * 0.7;
						echo "R$$valor<br>";
					}else if($consumo > 200){
						$valor = $consumo * 0.87;
						echo "R$$valor<br>";
					}else{
						echo"R$ 20<br>";
					}
				}else{
					echo "Aguardando Informação";
				}
			?>
			<br>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>