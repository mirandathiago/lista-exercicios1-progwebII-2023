<?php
			
			
	$opcao = $_POST["assunto"] ?? "";
	switch($opcao){
		case "1":
				$resposta = "<p class='alerta-verde'>O clima está como Ensolarado, recomendamos ir ao Clube</p>";
			break;
		case "2":
				$resposta = "<p class='alerta-verde'>O clima está como Ameno, recomendamos ir ao Parque</p>";
			break;
		case "3":
				$resposta = "<p class='alerta-amarelo'>O clima está como Chuvoso, recomendamos ir ao Cinema</p>";
			break;
		case "4":
				$resposta = "<p class='alerta-verde'>O clima está como Nublado, recomendamos ir ao Museu</p>";
			break;
		case "5":
				$resposta = "<p class='alerta-vermelho'>O clima está como Tempestuoso, recomendamos ficar em Casa</p>";
			break;
		default;
			$resposta = "<p>Aguardando...</p>";
	}
			
			
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
		<h1>Questão 9</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="post">
				<label>Clima:
					<select name="assunto">
						<option <?=$opcao==""?"selected":""?>></option>
						<option <?=$opcao=="1"?"selected":""?> value="1">Ensolarado</option>
						<option <?=$opcao=="2"?"selected":""?> value="2">Ameno</option>
						<option <?=$opcao=="3"?"selected":""?> value="3">Chuvoso</option>
						<option <?=$opcao=="4"?"selected":""?> value="4">Nublado</option>
						<option <?=$opcao=="5"?"selected":""?> value="5">Tempestuoso</option>
					</select>
			   </label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		
		<div class="box resposta">

			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];

				if($metodo == "POST"){
					echo "<p>{$resposta}</p>";
				}
			?>
			
		</div>
	</div>
</body>
</html>