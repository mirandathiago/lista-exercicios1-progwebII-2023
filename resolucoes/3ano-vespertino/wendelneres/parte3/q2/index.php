
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
			<h2>Tabuada</h2>
			<form action="index.php" method="post">
			  <label> Informe um número:
				<input type="number" name="num">
			  </label>
			  
				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Tabuada</h2>
			<?php
		
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				$n = $_POST["num"] ;
				$j = 0;
				while ($j < 11) {
					$tabuada = $n * $j;
					echo "<li>{$n} X {$j} = $tabuada</li>";
					$j++;	
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