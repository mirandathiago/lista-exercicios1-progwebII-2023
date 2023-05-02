


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
		<h1>Estruturas de repetição</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo de energia</h2>
			<form action="index.php" method="post">
				<label>Consumo de energia elétrica em kWh:
					<input type="number" name="consumo" required >
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
			$num1 = $_POST["consumo"] ?? 0 ;
			$taxa_minima = 20;
				
				if( $num1 <= 100){
					$valor = $num1 * 0.50 + $taxa_minima;
						if($valor > 20){	
							echo "<p class='alerta-azul'> O valor da conta é de R$ {$valor} </p>";
						}else{
							echo "<p class ='alerta-verde'> O valor da conta é de R$\{$taxa_minima}</p>";
						}
				}else if( $num1 <= 200){
					$valor = $num1 * 0.70 + $taxa_minima;		
					echo "<p class='alerta-amarelo'> O valor da conta é de R$ {$valor}  </p>";
				}else if($num1 > 200){
					$valor = $num1 * 0.87 + $taxa_minima;	
					echo "<p class='alerta-vermelho'> O valor da conta é de R$ {$valor} </p>";
				} 
			
			?>
		
		
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>