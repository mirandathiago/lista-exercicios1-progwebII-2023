<?php
	$divida=$_POST["divida"] ?? 0;
	$taxa=$_POST["taxa"] ?? 0;
	$valormes=$_POST["valormes"] ?? 0;
	$tempopagando = 0;

	/*No enunciado dessa questão havia que uma dívida de 5000,
 	com taxa de 2 por cento ao mes e pagando 200 reais, 
 	levaria 29 meses para ser quitada, porém leva na verdade 36*/
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
		<h1>Calculo de prazo para pagamento de dívida</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite as informações relacionadas à dívida:</h2>
			<form action="index.php" method="post">
				<label>Valor da dívida:
					<input type="number" id="divida" name="divida" required>
				</label>

				<label>Taxa de juros mensal::
					<input type="number" id="taxa" name="taxa" required>
				</label>

				<label>Valor mensal a ser pago:
					<input type="number" id="valormes" name="valormes" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					while($divida > 0){
						$divida += ($divida * ($taxa/100));
						$divida = $divida - $valormes;
						$tempopagando += 1;
					}
					
					echo"<h2>Tempo necessário para quitação da dívida:</h2>";
					echo"<p class='alerta-amarelo'>Serão necessários {$tempopagando} meses:</p>";	
				}
				
			?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>