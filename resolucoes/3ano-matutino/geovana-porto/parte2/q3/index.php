<?php


$nome = $_POST["nome"] ?? "";
date_default_timezone_set('America/bahia');
$hora = date("H");

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
		<h1>Formulário de Saudação</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Saudação</h2>
			<form action ="index.php" method ="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<hr>
			<br>
			<?php
   
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
         if( $hora >= 05 && $hora <= 12){
        echo "Bom dia,"," ", $nome. "!";
        }else if( $hora >= 13 && $hora <= 18){
        echo "Boa tarde,", " ", $nome. "!";
        }else if($hora >= 19 && $hora <= 23){
        echo "Boa noite,", " ", $nome. "!";
        }else if($hora >= 0 && $hora <= 4){
        echo "Vá Dormir, está de Madrugada!";

    }
}

?>
		</div>
	</div>
</body>
</html>