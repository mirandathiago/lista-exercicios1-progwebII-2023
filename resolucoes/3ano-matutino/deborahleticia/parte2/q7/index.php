<?php 
	$metodo = $_SERVER["REQUEST_METHOD"];
	$idade = $_POST["idade"] ?? "";
	$peso = $_POST["peso"] ?? "";
	$altura = $_POST["altura"] ?? "";
	$op = $_POST["genero"] ?? "";
	$TMB = 0;

	if($metodo == "POST"){
	switch ($op){
		case "feminino":
			$TMB = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
			$mensagem = "A taxa de metabolismo basal é $TMB ";
			break;
	
		case "masculino":
			$TMB = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 *$idade);
			$mensagem = "A taxa de metabolismo basal é $TMB ";
			break;
		}
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
		<h1>Formulário de TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Infromações referentes à pessoa</h2>
			<form action="index.php" method="post">
				<label>Idade:
					<input type="number" name="idade" step="1" required>
				</label>

				<label>Peso:
					<input type="number" name="peso" step="0.1" required>
				</label>

				<label>Altura:
					<input type="number" name="altura" step="0.1" required>
				</label>

				<label>Gênero:
					<select name="genero">
						<option <?=$op == "" ? "SELECTED" : "" ?>  value=""></option>
						<option <?=$op == "feminino" ? "SELECTED" : "" ?>  value="feminino">Feminino</option>
						<option <?=$op == "masculino" ? "SELECTED" : "" ?> value="masculino">Masculino</option>
					</select>
			   </label>

				<button name="enviar">Enviar</button>
			</form>
		</div>		
	</div>

	<?php if($metodo == "POST"){ ?>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p class="alerta-amarelo"> <?=$mensagem?> </p>
            <a href="index.php" class="link">Voltar à página inicial</a>
	<?php } ?> 

		</div>
	</div>
</body>
</html>