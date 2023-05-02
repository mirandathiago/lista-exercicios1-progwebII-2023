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
		<h1>Salada de frutas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="quest1.php" method="post">
			   <fieldset>
				<div>
				  <input type="checkbox" name="fruta1" value="morango">
				<label for="Morango">
                    <strong>Morango</strong> 
                </label>
				</div>
				<div>
				  <input type="checkbox" name="fruta2" value="banana">
				<label for="Banana">
                    <strong>Banana</strong>
                </label>
				</div>
				<div>
				  <input type="checkbox"  name="fruta3" value="manga">
				<label for="manga">
                    <strong>Manga</strong>
                </label>
				</div>
				<div>
				  <input type="checkbox" name="fruta4" value="uva">
				<label for="uva">
                    <strong>Uva</strong> 
                </label>
				</div>
				<div>
				  <input type="checkbox" name="frta5" value="melancia">
				<label for="Melancia">
                    <strong>Melancia</strong>
                </label>
				</div>
				<div>
				  <input type="checkbox" name="fruta6" value="caju">
				<label for="caju">
                    <strong>Cajú</strong> 
                </label>
				</div>
				<div>
				  <input type="checkbox"  name="fruta7" value="goiaba">
				<label for="goiaba">
                    <strong>Goiaba</strong> 
                </label>
				</div>
			  </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Frutas escolhidas</h2>
			<?php
				foreach($_POST as $frutas){
					echo "<li>{$frutas}</li>";
				}
			
			
			?>
		</div>
	</div>
</body>
</html>