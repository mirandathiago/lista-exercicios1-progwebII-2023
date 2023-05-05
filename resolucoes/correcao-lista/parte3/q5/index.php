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
		<h1>Questão 5 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>5- Pedro está endividado e precisa saber em quanto tempo conseguirá quitar sua dívida. Ele sabe o valor da dívida, a taxa de juros mensal e quanto consegue pagar mensalmente. Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago. Com base nesses dados, calcule em quantos meses a dívida será paga e apresente o resultado ao usuário utilizando o comando WHILE.</h2>

			<form action="index.php" method="post">
				
				<label>Valor Dívida:
					<input type="number" id="divida" name="divida" step="0.1" required value="<?=$_POST["divida"] ?? ""?>">
				</label>
				<label>Taxa Mensal:
					<input type="number" id="juros" name="juros" step="0.1" required value="<?=$_POST["juros"] ?? ""?>">
				</label>
				<label>Valor Mensal:
					<input type="number" id="mensal" name="mensal" step="0.1" required value="<?=$_POST["mensal"] ?? ""?>">
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

			 if($_SERVER["REQUEST_METHOD"] == "POST"){

				$divida = $_POST["divida"] ?? 0;
				$taxa = $_POST["juros"] ?? 0;
				$mensal = $_POST["mensal"] ?? 0;
				$meses = 0;

				$valor = $divida;

				while($valor > 0){
					$valor = $valor - $mensal;
					$valor = $valor + ($valor * ($taxa/100) );
					$meses++;
				}

				echo "<p class='alerta-verde'>Tendo uma dívida total de R\${$divida} com uma taxa de juros mensal de {$taxa}% e efetuando o pagamento de R\${$mensal} por mês, esta divida será paga em {$meses} meses</p>";



			 }

			?>


		</div>
	</div>
</body>
</html>
