<?php
	$multi = $_POST["multi"] ?? 0;
	$quant = $_POST["quant"] ?? 0;
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
                $metodo = $_SERVER["REQUEST_METHOD"];
				
				if($metodo == "POST"){
					$tabuada = 1;
					while($tabuada <= $quant){
						$produto = $tabuada * $multi;
						echo"$multi x $tabuada = $produto <br>";
						$tabuada++;
					}
				}else{
					echo"<p>Aguardando Operação</p>";}
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>