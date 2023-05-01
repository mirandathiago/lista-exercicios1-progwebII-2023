<?php
	$num = $_POST["num"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista - parte 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Cálculo: Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tabuada</h2>
			<form action="index.php" method="post">
				<label>Número:
					<input value="<?=$num?>" type="number" id="num" name="num" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$method = $_SERVER["REQUEST_METHOD"];

				if($method == "POST"){
					$vezes = 1;
					echo "<p>Tabuada do número {$num}</p>";
					while($vezes <= 10){
						$valorfinal = $num * $vezes;
						echo "<p>{$num} x {$vezes} = {$valorfinal}</p>";
						$vezes++;	
					}

				}else{
					echo "<p>Aguardando envio do formulário.</p>";
				}
			?>
		</div>
	</div>
</body>
</html>