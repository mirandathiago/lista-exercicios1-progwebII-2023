<?php
	$nota1 = $_POST["n1"] ?? 0;
	$nota2 = $_POST["n2"] ?? 0;
	$nota3 = $_POST["n3"] ?? 0;
	
	$media = round((($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5)) / 10);
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
		<h1>Calculadora de Médias</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as notas</h2>
			<form action="index.php" method="post">
				<label>Nota 1:
					<input type="number" id="number" name="n1" step="0.01" min="0"  required value="<?=$nota1?>">
				</label>

				<label>Nota 2:
					<input type="number" id="number" name="n2" step="0.01" min="0"  required value="<?=$nota2?>">
				</label>

				<label>Nota 3:
					<input type="number" id="number" name="n3" step="0.01" min="0"  required value="<?=$nota3?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Média</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){
					if($media >= 6){
						echo "Sua média foi: $media";
						?><p class="alerta-verde">APROVADO!</p><?php
					}else{
						echo "Sua média foi: $media";
						?><p class="alerta-vermelho">REPROVADO!</p><?php
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

