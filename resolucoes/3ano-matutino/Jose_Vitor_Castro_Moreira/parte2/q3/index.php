<?php
	$nome = $_GET["nome"] ?? "";
	date_default_timezone_set('America/Sao_Paulo');
	$horario = date('H:i:s', time());
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Saudações</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
				<label><h3>Nome:</h3>
					<input type="text" id="nome" name="nome" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Saudação</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "GET" && isset($_GET["enviar"])){

				if($horario >= '05:00:00' && $horario <= '12:59:59'){
					echo "Bom Dia, $nome!<br>Agora são $horario";	
				}else if($horario >= '13:00:00' && $horario <= '18:00:00'){
					echo "Boa Tarde, $nome!<br>Agora são $horario";
				}else if ($horario >= '18:00:00' && $horario <= '23:59:59'){
					echo "Boa Noite, $nome!<br>Agora são $horario";
				}else {
					echo "Vá dormir, $nome!<br>Agora já são $horario, está de madrugada!";}
			}else{
				echo "<p>Aguardando Informação</p>";}
			?>
			<br>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>