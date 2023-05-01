<?php
	$nome = $_POST["nome"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Saudação</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input value="<?=$nome?>" type="text" id="nome" name="nome" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
			<h2></h2>
			<?php
			$method = $_SERVER["REQUEST_METHOD"];

			date_default_timezone_set('America/Bahia');
			$hora = date('H');

			if($method == "POST"){
				if($hora >= 05 && $hora <= 12){
					$mensagem = "Bom dia,";
				}else if($hora >= 13 && $hora <= 18){
					$mensagem = "Boa tarde,";
				}else if($hora > 18 && $hora <= 23){
					$mensagem = "Boa noite,";
				}else if($hora >= 00 && $hora <= 04){
					$mensagem = "Vá dormir, está de madrugada,";
				}

				echo "<p class='alerta-verde'>{$mensagem} {$nome}!</p>";

			}else{
				echo "<p>Aguardando envio do formulário.</p>";
			}
			?>
		</div>
	</div>
</body>
</html>