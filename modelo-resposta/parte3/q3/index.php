<?php
	$ni = $_POST["ni"] ?? 0;
	$nf = $_POST["nf"] ?? 0;
	$cont = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Pares em Intevalo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Números</h2>
			<br>
			<form action="index.php" method="post">
			<label>Insira o intervalo inicial:
				<input type="number" id="nome" name="ni" min=0 required>
			</label>

			<label>Insira o intervalo final:
				<input type="number" id="nome" name="nf" min=0 required>
			</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Pares entre <?=$ni?> e <?=$nf?></h2>
			<br>
			<p class="alerta-verde">

				<?php
					for($x = $ni; $x <= $nf; $x++){
						if($x % 2 == 0){
							echo "{$x} <br>";
							$cont++;
						}
					}
				?>

			</p>

			<br>
			<br>
			<p class="alerta-amarelo">
				
				<?php
					if($cont == 1){
						echo "Há {$cont} par.";
					}else{
						echo "Há {$cont} pares.";
					}
				?>

			</p>
		</div>
	</div>
</body>
</html>