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
		<h1>Questão 6 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>6- A fábrica "Produtos Incríveis" precisa de uma solução para registrar o tempo de duração de sua produção, desde o início até o término. Esses eventos podem ter uma duração muito longa, medida em segundos, o que torna difícil a visualização do tempo total de produção. Para isso, será necessário criar um formulário que permita ao usuário digitar o tempo de duração em segundos de um determinado evento e, em seguida, converter esse tempo em horas, minutos e segundos. Utilize uma estrutura de repetição para fazer a conversão.</h2>

			<form action="index.php" method="post">
				
				<label>Duração em Segundos:
					<input type="number" id="duracao" name="duracao" required value="<?=$_POST["duracao"] ?? ""?>">
				</label>
				

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){

					$duracao = $_POST["duracao"] ?? 0;

					$hora = 0;
					$minuto = 0;
					$segundo = 0;

					while($duracao > 0){

						if($duracao >= 3600 ){
							$duracao = $duracao - 3600;
							$hora++;
						}else if($duracao >= 60){
							$duracao = $duracao - 60;
							$minuto++;
						}else{
							$segundo = $duracao;
							$duracao = 0;
						}
					}

					echo "<p class='alerta-verde'>Tempo em Segundos: {$_POST["duracao"]} -> {$hora}h {$minuto}m {$segundo}s</p>";

				}

			?>


		</div>
	</div>
</body>
</html>
