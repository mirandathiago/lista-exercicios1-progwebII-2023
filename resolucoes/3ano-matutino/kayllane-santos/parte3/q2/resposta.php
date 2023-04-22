<?php
	$numero = $_POST["numero"] ?? 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tabuada</h1>
	</header>
	<div class="container">
	<div class="box resposta">
			<h2>Tabuada do <?=$numero?></h2>

			<?php
				
				$resultado = 1;
				$i = 1;

				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					while($i <= 10){
						$resultado = $numero * $i;
						echo "<p class='alerta-azul'>{$numero} x {$i} = {$resultado}. </p>";
						$i++;
					}
				}else{
					echo "<p>Aguardando a Operação</p>";
				}
			?>

		</div>	
	</div>
</body>
</html>