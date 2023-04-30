<?php
	$tempo = $_POST["tempo"] ?? "";

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
		<h1>Formatando segundos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com o tempo do evento em segundos:
					<input type="number" name="tempo" required value="<?=$tempo?>">
				</label> 
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$horas = intdiv($tempo, 3600);
					$minutos = intdiv(($tempo%3600), 60);
					$segundos = ($tempo%3600)% 60;
					print "{$horas}:{$minutos}:$segundos";
			} else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>