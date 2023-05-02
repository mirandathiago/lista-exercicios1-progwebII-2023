<?php
	$nome= $_POST["nome"] ?? "usuário";
	Date_default_timezone_set('America/Bahia');
	//Função que define um fusorario de um local, no caso a Bahia
	$horaatual= date('H');

	
	if($horaatual >= 5 && $horaatual <= 12){
		$mensagem="Bom dia!";
	}else if($horaatual >= 13 && $horaatual < 18){
		$mensagem="Boa tarde!";
	}else if($horaatual >= 18 && $horaatual <= 23){
		$mensagem="Boa noite!";
	}else if($horaatual >= 00 && $horaatual <= 04){
		$mensagem="Vá dormir! Está de madrugada.";
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
		<h1>Progama educado!</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Diga seu nome, amigo:</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>O progama educado lhe deseja:</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					echo "<p>São {$horaatual} horas</p>";
					echo "<p>{$mensagem} {$nome}</p>";
				}
			?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>