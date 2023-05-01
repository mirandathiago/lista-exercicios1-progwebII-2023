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
		<h1>Cálculo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Soma dos números de 1 a N</h2>
			<form action="index.php" method="post">
				<label>Informe um Número (N):
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
					$soma = 0;
					for($i = 1; $i <= $num; $i++){
						$soma = $soma + $i;
					} 
					echo "<p>1 a {$num}<br>Soma dos números: <strong>{$soma}</strong></p>";
				}else{
					echo "<p>Aguardando envio do formulário.</p>";
				}
			?>
		</div>
	</div>
</body>
</html>