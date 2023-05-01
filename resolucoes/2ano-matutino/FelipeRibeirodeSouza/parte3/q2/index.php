<?php
	$numero=$_POST["numero"] ?? 0;
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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite o número do qual deseja-se saber a tabuada:</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input type="number" id="numero" name="numero" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					echo"<h2>Tabuada do número $numero</h2>";
					$i= 0;
					while($i<=10){
						$resultado = $numero * $i;
						echo "<p class='alerta-amarelo'>{$numero} x {$i} = {$resultado}</p>";
						$i++;
					}
				}
			?>
			
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>