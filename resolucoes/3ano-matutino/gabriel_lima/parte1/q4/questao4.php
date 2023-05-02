<?php

	$consumedio = $_POST["consumedio"] ?? "" ;
	$distancia = $_POST["distancia"] ?? "";

	

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
		<h1>Calculando Consumo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados</h2>
			<form action="questao4.php" method="post">
				<label>Consumo médio de combustível:
					<input type="number" id="consumedio" name="consumedio" placeholder="Aguardando" value="<?=$consumedio?>" required>
				</label>

				<label>Distância a percorrer:
					<input type="number" id="distancia" name="distancia" placeholder="Aguardando" value="<?=$distancia?>" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];	

				if ($metodo == "POST") {
					$combustivel = $distancia / $consumedio; 
					echo "<p>Quantidade de combustível necessário: {$combustivel} Litros</p>";
				}else{
                    echo "<p>Aguardando a operação</p>";
                }
				
				?>
			
		</div>
	</div>
</body>
</html>