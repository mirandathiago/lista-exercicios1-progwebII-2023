
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
    <h1>Calculadora de Velocidade Média</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Preecha o campos abaixo</h2>
			<form method="POST">
		<label for="distancia">Distância a percorrer (em km):</label>
		<input type="number" step="0.01" min="0" name="distancia" required><br><br>
		<label for="tempo">Tempo desejado para completar a prova (em horas):</label>
		<input type="number" step="0.01" min="0" name="tempo" required><br><br>
		
        
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php
		if(isset($_POST['enviar'])) {
			$distancia = $_POST['distancia'];
			$tempo = $_POST['tempo'];

			$velocidade_media = $distancia / $tempo;
			echo "Para completar a prova de $distancia km em $tempo horas, o atleta precisa manter uma velocidade média de " . round($velocidade_media, 2) . " km/h.";
		}
	?>
			
		</div>
	</div>
</body>
</html>