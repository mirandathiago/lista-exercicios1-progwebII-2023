<?php

$nome = $_POST ["nome"] ?? " ";
$hora = date('H');

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
		<h1>HORÁRIO</h1>
	</header>
	<div class="container">
		<div class="box resposta">


			<?php if($hora == 05 && $hora <= 12){
				echo "<p class='alerta-verde'>Bom dia, {$nome}!. São {$hora} horas!</p>";
			}else if($hora >= 13 && $hora<=18){

				echo "<p class='alerta-verde'>Boa tarde, {$nome}!. São {$hora} horas!</p>";
			}else if($hora > 18 && $hora <=23){
				echo "<p class='alerta-verde'>Boa noite, {$nome}!. São {$hora} horas!</p>";
			}else if($hora <= 4){
				echo "<p class='alerta-vermelho'>Vai dormir, {$nome}!. São {$hora} horas! Está tarde</p>";

			}



			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>