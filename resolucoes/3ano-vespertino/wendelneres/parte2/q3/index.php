
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
			<h2>Saudação</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" name="nome" required >
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
			$nome = $_POST["nome"]?? "" ;
			date_default_timezone_set('America/Sao_Paulo');
			$hora = date("H");
			//echo "<p>{$hora}</p>";
			if($hora >= 5 && $hora <= 12){
				echo "<p class = 'alerta-amarelo'>Bom dia, {$nome}";
			}else if($hora >= 13 && $hora < 18){
				echo "<p class = 'alerta-verde'>Boa tarde, {$nome}";
			}else if($hora >= 18 && $hora < 23){
				echo "<p class = 'alerta-azul'>Boa noite, {$nome}";
			}else if($hora >= 00 && $hora < 4){
				echo "<p class = 'alerta-vermelho'>Vá Dormir, está de Madrugada, {$nome}";
			}
		
			?>

		<br>
            <a href="formulario-resposta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>