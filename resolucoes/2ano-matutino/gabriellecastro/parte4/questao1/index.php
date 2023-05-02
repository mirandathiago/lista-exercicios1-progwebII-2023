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
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="fruta1" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="fruta2" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="fruta3" value="uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="fruta4" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="fruta5" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
				<div>
				  <input type="checkbox" id="melancia" name="fruta6" value="melancia">
				  <label for="melancia">Melancia</label>
				</div>
				<div>
				  <input type="checkbox" id="mamao" name="fruta7" value="mamao">
				  <label for="mamao">Mamão</label>
				</div>
			  </fieldset>

	
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Frutas Celecionadas</h2>
				<?php
					
					foreach($_POST as $entrada){
						echo "<li>{$entrada}</li>";
					}

				?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>