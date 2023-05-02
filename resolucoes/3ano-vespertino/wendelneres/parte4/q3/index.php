
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
			<h2>Pizzaria</h2>
			<form action="index.php" method="post">
			
				  <input type="checkbox"  name="sabores[]" value="Calabresa">
				  <label >Calabresa</label>
				  <br>
				  <input type="checkbox" name="sabores[]" value="Frango">
				  <label >Frango</label>
				  <br>
				  <input type="checkbox" name="sabores[]" value="Queijo">
				  <label >Queijo</label>
					<br>
				  <input type="checkbox"  name="sabores[]" value="Portuguesa">
				  <label >Portuguesa</label>
				<br>
				  <input type="checkbox" name="sabores[]" value="Presunto">
				  <label >Presunto</label>
				<br>
			

				<button name="enviar"> Calcular</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
		
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
			$sabores = $_POST["sabores"];
			foreach($sabores as $sabor){
				echo"<p class='alerta-laranja'>$sabor</p>";

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