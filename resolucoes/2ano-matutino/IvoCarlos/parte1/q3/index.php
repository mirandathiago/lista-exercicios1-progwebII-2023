<?php
	$metodo = ($_SERVER["REQUEST_METHOD"]);
	$nota1 = $_POST["nota1"] ?? " ";
	$nota2 = $_POST["nota2"] ?? " ";
	$nota3 = $_POST["nota3"] ?? " ";
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
		<h1>Questão 3 - MEDIA FINAL</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calcule a media final do aluno : </h2>
			<form action="index.php" method="post">
				<label>Nota da primeira prova:
					<input type="number" name="nota1" step="0.1"required value="<?=$nota1?>">
				</label>
				<label>Nota da segunda prova:
					<input type="number" name="nota2" step="0.1" required value="<?=$nota2?>">
				</label>
				<label>Nota da terceira prova:
					<input type="number" name="nota3" step="0.1"required value="<?=$nota3?>">
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	
     <div class="box resposta">
			<h2>Média Final:</h2>
			<?php
				if($metodo == "POST"){
                $nota1= $nota1 * 0.2;
                $nota2= $nota2 * 0.3;
                $nota3= $nota3 * 0.5;
                $mediafinal = $nota1 + $nota2 + $nota3;
                echo "<div class='alerta verde'> <br><br><h4>Média: {$nota1} + {$nota2} + {$nota3} = {$mediafinal}<h4></div>";
			}

			?>
		</div>
	</div>
</body>
</html>