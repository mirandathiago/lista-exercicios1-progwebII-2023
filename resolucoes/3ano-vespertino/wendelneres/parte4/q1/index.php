
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
			<h2>Frutas</h2>
			<form action="index.php" method="post">
			
				  <input type="checkbox"  name="frutas[]" value="banana">
				  <label >Banana</label>
				  <br>
				  <input type="checkbox" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				  <br>
				  <input type="checkbox" name="frutas[]" value="uva">
				  <label for="uva">Uva</label>
					<br>
				  <input type="checkbox"  name="frutas[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				<br>
				  <input type="checkbox" name="frutas[]" value="laranja">
				  <label for="laranja">Laranja</label>
				<br>
			

				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
		
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
			$frutas = $_POST["frutas"];
			foreach($frutas as $fruta){
				echo"<p class='alerta-verde'>$fruta</p>";

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