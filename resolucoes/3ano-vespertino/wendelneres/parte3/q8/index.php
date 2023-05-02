
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
			<h2>Taxa de crescimento anual</h2>
			<form action="index.php" method="post">
			  <label> Número atual de habitantes da cidade A:
				<input type="number" name="valor1">
			  </label>
			  <label> Taxa de crescimento anual da cidade A:
				<input type="number" name="taxa1" step="0.1">
			  </label>
			  <label> Número atual de habitantes da cidade B:
				<input type="number" name="valor2">
			  </label>
			  <label> Taxa de crescimento anual da cidade B:
				<input type="number" name="taxa2" step="0.1">
			  </label>

				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
		
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
			$valor1 = $_POST["valor1"];
			$taxa1 = $_POST["taxa1"];
			$valor2 = $_POST["valor2"];
			$taxa2 = $_POST["taxa2"];
			$anos = 0;

			if($valor1 > $valor2){
				echo"<p class='alerta-azul'> A cidade A já tem mais habitantes do que a cidade B</p>";
			}elseif($taxa1 < $taxa2){
				echo "<p class='alerta-verde'>A cidade A não alcançará o número de habitantes da cidade B com essa taxa de crescimento.
				</p>";
			}else{
				while ($valor1 < $valor2) {
					$valor1 = $valor1+($valor1*($taxa1/100));
					$valor2 = $valor2+($valor2*($taxa2/100));
				
					$anos++;
				}
				echo"<p class='alerta-laranja'>Serão necessários {$anos} anos para que a população da cidade A ultrapasse a da cidade B.
				</p>";
			}
			
		}else{
			echo "<p class='alerta-vermelho'>Informe um número</p>";
		}
			?>
			<br>
          <a href="formulario-resposta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>