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
		<h1>Formulário de Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Sabores da pizza</h2>
			<form action="index.php" method="post">
			   <fieldset>
				<legend>Sabores:</legend>
				<div>
				  <input type="checkbox" name="sabor1" value="Calabresa">
				  <label for="Calabresa"><strong>Calabresa</strong>: ( linguiça calabresa, molho de tomate fresco, cebola, azeitona, queijo muçarela e orégano salpicado)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor2" value="Portuguesa">
				  <label for="Portuguesa"><strong>Portuguesa</strong>: (cebola, azeitona, ervilha, queijo, presunto)</label>
				</div>
				<div>
				  <input type="checkbox"  name="sabor3" value="Marguerita">
				  <label for="Marguerita"><strong>Marguerita</strong>: (muçarela, tomate, manjericão, orégano)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor4" value="Frango com catupiry">
				  <label for="Frango com catupiry"><strong>Frango com catupiry</strong>: (catupiry e frango desfiado)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor5" value="Napolitana">
				  <label for="Napolitana"><strong>Napolitana</strong>: (orégano salpicado, tomate fresco, azeitona sem caroço, queijo muçarela e parmesão)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor6" value="Quatro queijos">
				  <label for="Quatro queijos"><strong>Quatro queijos</strong>: (muçarela, catupiry, provolone e parmesão)</label>
				</div>
				<div>
				  <input type="checkbox"  name="sabor7" value="Atum com cebola">
				  <label for="Atum com cebola"><strong>Atum com cebola</strong>: (atum sólido, cebola em rodelas e molho de tomate)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor8" value="Baiana">
				  <label for="Baiana"><strong>Baiana</strong>: (calabresa moída, ovos, pimenta, cebola e um toque de parmesão)</label>
				</div>
				<div>
				  <input type="checkbox" name="sabor9" value="Caipira">
				  <label for="Caipira"><strong>Caipira</strong>: (frango, milho e catupiry)</label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Saores Solicitados:</h2>
			<?php
				foreach($_POST as $sb){
					echo "<li>{$sb}</li>";
				}
			
			
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>