<?php
    $nome = $_POST["nome"] ?? João;
    $date = date('H');
    if($date >= 5 && $date <= 12){
        $msg = "Bom dia";
    }else if($date >= 13 && $date <= 18){
        $msg = "Boa tarde";
    }else if($date >= 19 && $date <= 23){
        $msg = "Boa noite";
    }else if($date >= 00 && $date <= 04){
        $msg = "Vá dormir, está de madrugada!";
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
            echo "{$msg}, {$nome}.";
            ?>
		</div>
	</div>
</body>
</html>