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
		<h1>Fatorial</h1>
	</header>
	<div class="container">
		<!-- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. -->
		<div class="box formulario">
			<form action="index.php" method="POST">
				<h2>Vamos calcular o fatorial</h2>
				<label>Insira um número inteiro:
					<input type="number" name="numero" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>	
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
				$numero = $_POST["numero"] ?? 1;
				$fatorial = 1;
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){
					if($numero == 0){
						echo "<p class='alerta-azul'>O fatorial de 0 é 1.</p>";
					}else{
						for($i = $numero; $i >= 1; $i--){
							$fatorial = $fatorial * $i;
						}
						echo "<p class='alerta-azul'>O fatorial de {$numero} é {$fatorial}.</p>";
					}
				}else{
					echo "<p>Aguardando a Operação</p>";
				}

			?>

			
            
		</div>	
	</div>
</body>
</html>