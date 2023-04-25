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
			<h2>Divida</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Valor da Dívida R$:
					<input type="number" name="divida" required>
				</label>

				<label>Taxa de Juros Mensal:
					<input type="number"  name="juros" required>
				</label>

				<label>Valor Mensal a ser Pago:
					<input type="number" name="mensal" required>
				</label>

			
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
<?php
		$dv = $_POST["divida"] ?? 0;
		$jrs = $_POST["juros"] ?? 0;
		$mns = $_POST["mensal"] ?? 0;	

		$cont = 0;

		while($dv >= 0){
			$jr = $dv * ($jrs/100);
			$dv -= $mns;
			$dv += round($jr, 3);
			$cont ++;  
		}

		echo "<p class='alerta-verde'>Serão necessários {$cont} meses para quitar a dívida</p>"

?>
		</div>
	</div>
</body>
</html>
