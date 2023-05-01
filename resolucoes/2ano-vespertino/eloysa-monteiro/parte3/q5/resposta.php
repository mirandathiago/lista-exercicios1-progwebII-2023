<!--Pedro está endividado e precisa saber em quanto tempo conseguirá quitar sua dívida. Ele sabe o valor da dívida, a taxa de juros mensal e quanto consegue pagar mensalmente. Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago. Com base nesses dados, calcule em quantos meses a dívida será paga e apresente o resultado ao usuário utilizando o comando WHILE.
 -->
 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="box resposta">
			<?php

				$nome = $_POST["nome"];
				$divida = $_POST["divida"] ?? 0;
				$taxaJuros = $_POST["taxa"] ?? 0;
				$valorMensal = $_POST["valorMensal"] ?? 0;
				$qtdmeses = 0;

				$taxaJuros = $taxaJuros/100;

				while($divida >= 0){
					$divida = $divida - $valorMensal;
					$divida = $divida + ($divida * $taxaJuros);

					$qtdmeses++;
				}

				//var_dump($divida);
				//var_dump($valorMensal);

				echo "<p class = 'alerta-verde'>{$nome}, a quantidade de meses que você demorará para pagar é {$qtdmeses} meses </p>";


            ?>
		</div>
	</div>
</body>
</html>
