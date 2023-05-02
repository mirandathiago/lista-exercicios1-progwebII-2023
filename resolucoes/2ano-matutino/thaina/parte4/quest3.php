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
		<h1>Cardápio</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione os sabores:</h2>
			<form action="quest3.php" method="post">
			   <fieldset>
               <div>
				  <input type="checkbox" name="sabor1" value="Frango com catupiry">
				  <label for="Frango com catupiry"><strong>Frango com catupiry</strong> -> (catupiry e frango desfiado)</label>
				</div>
				<div>
				  <input type="checkbox"  name="sabor2" value="Marguerita">
				  <label for="Marguerita"><strong>Marguerita</strong> -> (muçarela, tomate, manjericão, orégano)</label>
				</div>
                <div>
				  <input type="checkbox" name="sabor3" value="Portuguesa">
				  <label for="Portuguesa"><strong>Portuguesa</strong> -> (cebola, azeitona, ervilha, queijo, presunto)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor4" value="Calabresa">
				  <label for="Calabresa"><strong>Calabresa</strong> -> ( linguiça calabresa, molho de tomate fresco, cebola, azeitona, queijo muçarela e orégano salpicado)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor5" value="Napolitana">
				  <label for="Napolitana"><strong>Napolitana</strong> -> (orégano, tomate fresco, azeitona sem caroço, queijo muçarela e parmesão)</label>
				</div>
                <div>
				  <input type="checkbox" name="sabor6" value="Baiana">
				  <label for="Baiana"><strong>Baiana</strong> -> (calabresa moída, ovos, pimenta, cebola e um toque de parmesão)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor7" value="Quatro queijos">
				  <label for="Quatro queijos"><strong>Quatro queijos</strong> -> (muçarela, catupiry, provolone e parmesão)</label>
				</div>
				<div>
				  <input type="checkbox"  name="sabor8" value="Atum com cebola">
				  <label for="Atum com cebola"><strong>Atum com cebola</strong> -> (atum sólido, cebola em rodelas e molho de tomate)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor9" value="nordestina">
				  <label for="nordestina"><strong>Nordestina</strong> -> (carne de sol, banana, queijo)</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores escolhidos:</h2>
			<?php
				foreach($_POST as $sabor){
					echo "<li>{$sabor}</li>";
				}
			
			
			?>
		</div>
	</div>
</body>
</html>