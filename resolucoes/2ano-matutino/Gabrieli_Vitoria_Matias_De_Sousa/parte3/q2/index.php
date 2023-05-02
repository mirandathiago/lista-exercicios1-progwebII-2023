<?php

/* Define duas variáveis que serão usadas para guardar o número a ser multiplicado 
pelo multiplicador informado pelo usuário e o número final da tabuada */
$multi = $_POST["multi"] ?? "";
$quant = $_POST["quant"] ?? "";
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
			<h2>Informe</h2>
			<form action="index.php" method="post">
				<label>Multiplicador:
					<input type="number" id="number" name="multi" min="0" value="<?=$multi?>" required>
				</label>
				<label>Número final da tabuada:
					<input type="number" id="number" name="quant" min="0" value="<?=$quant?>"  required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
                /* Verifica se o método de requisição HTTP é POST, ou seja, se o usuário já submeteu o formulário */
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					/* Inicializa a variável $tabuada com o valor 1 e utiliza o loop while para calcular cada item da tabuada 
					   até atingir o número final da tabuada informado pelo usuário */
					$tabuada = 1;
					while($tabuada <= $quant){
						$produto = $tabuada * $multi;
						echo"$multi x $tabuada = $produto <br>";
						$tabuada++;
					}
				}else{
					/* Se o usuário ainda não submeteu o formulário, exibe uma mensagem de aguardando operação */
					echo"<p>Aguardando Operação</p>";}
            ?>
		</div>
	</div>
</body>
</html>