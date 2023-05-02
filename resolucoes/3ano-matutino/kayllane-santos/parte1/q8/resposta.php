<?php
	/* Sabendo que a loja Magazine PHP utiliza juros simples em sua cobrança e cobra 4% de juros a cada mês, crie um programa em PHP que receba os dados do formulário e calcule o valor total a ser pago por Maria. */

	$valor = $_POST["valor"];
	$opcao = $_POST["vezes"];
	$juros = 0.04;

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Resultado</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Celular de valor: R$<?=number_format($valor, 2, ',', '.')?> dividido em <?=$opcao?>x.</h2>

			<?php
			// Fórmula Juros Simples: ValorFinal = ValorCelular * (1 + Juros * tempo)
				switch($opcao){
					case 1: 
						$valorfinal = $valor;
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 2:
						$valorfinal = $valor * (1 + $juros * 2);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;		
					case 3: 
						$valorfinal = $valor * (1 + $juros * 3);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;	
					case 5: 
						$valorfinal = $valor * (1 + $juros * 5);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 6: 
						$valorfinal = $valor * (1 + $juros * 6);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 7: 
						$valorfinal = $valor * (1 + $juros * 7);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 8: 
						$valorfinal = $valor * (1 + $juros * 8);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 9: 
						$valorfinal = $valor * (1 + $juros * 9);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 10: 
						$valorfinal = $valor * (1 + $juros * 10);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 11: 
						$valorfinal = $valor * (1 + $juros * 11);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					case 12: 
						$valorfinal = $valor * (1 + $juros * 12);
						echo "<p class='alerta-azul'>Valor final a pagar: {$valorfinal}</p>";
						break;
					default: echo "<p class='alerta-vermelho'>Inválido!</p>";
				}
			?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>