<?php

/*Pedro está endividado e precisa saber em quanto tempo conseguirá quitar sua dívida. 
Ele sabe o valor da dívida, a taxa de juros mensal e quanto consegue pagar mensalmente. 
Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago. 
Com base nesses dados, 
calcule em quantos meses a dívida será paga e apresente o resultado ao usuário utilizando o comando WHILE. */

	$divida = $_POST["divida"] ?? "";
	$taxa = $_POST["taxa"] ?? "";
	$mensal = $_POST["mensal"] ?? "";
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
		<h1>Despesa</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				
				<label>Valor da dívida (R$):
					<input type="number" id="number" name="divida" min="0" value="<?=$divida?>" required>
				</label>
				<label>Taxa de juros mensal (%):
					<input type="number" id="number" name="taxa" min="0" value="<?=$taxa?>"  required>
				</label>
				<label>Valor mensal pago (R$):
					<input type="number" id="number" name="mensal" min="0" value="<?=$mensal?>"  required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
                $metodo = $_SERVER["REQUEST_METHOD"];
				$juros = $taxa / 100;
				if($metodo == "POST"){
					$mes = 0;
					while($divida > 0){
						$divida = ($divida + ($divida * $juros)) - $mensal;
						echo "$divida<br>";
						$mes++;
					}
					echo"Serão necessários $mes meses para quitar a dívida.<br>";
				}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
		</div>
	</div>
</body>
</html>