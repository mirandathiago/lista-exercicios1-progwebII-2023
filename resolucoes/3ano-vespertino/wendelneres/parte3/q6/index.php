
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
			<h2>Fabrica produtos incriveis &#127848;	</h2>
			<form action="index.php" method="post">
			  <label> Tempo de duração em segundos:
				<input type="number" name="tempo">
			  </label>
				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
		
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
			$tempo = $_POST["tempo"];
			$hora = 0;
			$minuto = 0;
			$segundo = 0;

			while( $tempo > 3600){
				$tempo = $tempo - 3600;
				$hora++;
			
			}
			while($tempo > 60){
				$tempo = $tempo-60;
				$minuto++;
			}
			while($tempo > 0){
				$tempo = $tempo-1;
				$segundo++;
			}
			echo "<p>{$hora}:{$minuto}:{$segundo}</p>";
			
				
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