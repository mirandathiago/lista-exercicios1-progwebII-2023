<?php
    $nome = $_POST["nome"] ?? "";
	date_default_timezone_set('America/Sao_Paulo');
	$hora = date('H');
	$saida = "";
	if($hora >= 05 && $hora <= 12){
		$saida = "Bom dia, ";
	}
	else if($hora >= 13 && $hora < 18){
		$saida = "Boa tarde, ";
	}
	else if($hora >= 18 && $hora <= 23){
		$saida = "Boa noite, ";
	}
	else if($hora >= 00 && $hora <=04){
		$saida = "Vá dormir, está de madrugada!";
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
		<h1>Bom dia, boa tarde, boa noite, vá dormir</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com seu nome:
					<input type="text" name="nome" required value="<?=$nome?>">
				</label>
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){?>
			<h2><?=$saida?><?=$nome?>!</h2>
			<?php }else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>