<?php

	$clima = $_POST["clima"] ?? "";



?>
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
		<h1>Questão 9 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>9- Maria está planejando sair de casa, mas ela quer escolher um local adequado de acordo com o clima do dia. Para isso, ele precisa da sua ajuda para criar um formulário que permita selecionar uma das seguintes opções de clima: ensolarado, ameno, chuvoso, nublado, tempestuoso. Em seguida, utilizando a estrutura de controle switch, você deve indicar qual local é mais apropriado para cada opção de clima escolhida por Maria. Considere as seguintes opções de locais:<br>

Ensolarado: Clube<br>
Ameno: Parque<br>
Chuvoso: Cinema<br>
Nublado: Museu<br>
Tempestuoso: Ficar em casa<br>
</h2>
			<form action="index.php" method="post">
			
				<label>Clima:
					<select name="clima">
						<option></option>
						<option value="Ensolarado" <?=$clima == "Ensolarado" ? "SELECTED" : ""?>>Ensolarado</option>
						<option value="Ameno" <?=$clima == "Ameno" ? "SELECTED" : ""?>>Ameno</option>
						<option value="Chuvoso" <?=$clima == "Chuvoso" ? "SELECTED" : ""?>>Chuvoso</option>
						<option value="Nublado" <?=$clima == "Nublado" ? "SELECTED" : ""?>>Nublado</option>
						<option value="Tempestuoso" <?=$clima == "Tempestuoso" ? "SELECTED" : ""?>>Tempestuoso</option>
					</select>
			   </label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){


					switch($clima){
						case "Ensolarado":
							echo "<p>Com o clima {$clima}, recomendamos ir ao Clube.</p>";
						break;
						case "Ameno":
							echo "<p>Com o clima {$clima}, recomendamos ir ao Parque.</p>";
						break;
						case "Chuvoso":
							echo "<p>Com o clima {$clima}, recomendamos ir ao Cinema.</p>";
						break;
						case "Nublado":
							echo "<p>Com o clima {$clima}, recomendamos ir ao Museu.</p>";
						break;
						case "Tempestuoso":
							echo "<p>Com o clima {$clima}, recomendamos ficar em casa.</p>";
						break;

						


					}




				}


			?>

		</div>
	</div>
</body>
</html>