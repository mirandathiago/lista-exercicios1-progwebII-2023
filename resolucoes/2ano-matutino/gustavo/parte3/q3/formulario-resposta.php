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
			<h2>Numeros Pares</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Número Inicial:
					<input type="number" name="num1" required>
				</label>

				<label>Número Final:
					<input type="number" name="num2" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Quantidade de numeros pares no intervalo:</h2>
			
				<?php
					$ni = $_POST["num1"] ?? 0;
					$nf = $_POST["num2"] ?? 0;
					$cont = 0;
			
					for($ni; $ni <= $nf; $ni++){
						if($ni % 2 == 0){
							$cont ++;
						}
					}
					echo "<p class='alerta-vermelho'> No intervalo possui {$cont} números pares.</p>";
				?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>