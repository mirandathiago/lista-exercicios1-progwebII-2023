<?php 
	$num=$_POST["num"]?? 0;

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
		<h1>Fatorial de um Número</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Informe um número inteiro:
					<input type="number" id="num" name="num" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($num== 0){
					echo "O fatorial de 0 é 1";
				} else {
					$fatorial = 1;
					for($i=$num; $i>=1; $i--){
						$fatorial *= $i;
					}
				echo "<p>O fatorial de {$num} é {$fatorial}</p>";
			}


			?>

		</div>
	</div>
</body>
</html>