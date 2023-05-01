<?php


$nome = $_POST["nome"] ?? "";
$idade = $_POST["idade"] ?? 0;
$peso = $_POST["peso"] ?? 0;
$altura = $_POST["altura"] ?? 0;
$genero = $_POST["genero"] ?? "";


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
		<h1>Formulário de Calculo de TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora TMB</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>Idade(Anos):
					<input type="number" id="idade" name="idade" required>
				</label>

				<label>Peso(Kg):
					<input type="number" id="peso" name="peso" required>
				</label>
				<label>Altura(cm):
					<input type="number" id="altura" name="altura" required>
				</label>
				<label>Gênero(M ou F):
					<input type="text" id="genero" name="genero" required>
				</label>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
        
        switch($genero){
        case "M":
		
       $TMB = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
        break;
        case "F":
        $TMB =  447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
        break;
    }
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "$nome, a sua taxa de metabolismo basal (TMB) é de aproximadamente $TMB calorias por dia.";
	}
?>



		</div>
	</div>
</body>
</html>