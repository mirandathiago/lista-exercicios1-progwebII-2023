<?php
	$num = $_POST["num"] ?? 0;
	$fatorial = 1;
	$saida = "";
	$numin = $num;
	do {
		$nums = (string)$num;
		if ($num > 1) {
			$saida .= "$nums x ";
		}else{
			$saida .= "$nums = ";
		}  
		$fatorial *= $num;
		$num--;
	} while ($num >= 1);
	$saida .= "{$fatorial}"
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="questao1.php" method="post">
				<label>Insira um numero:
					<input type="number" id="num" name="num" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					echo "<h3>O fatorial de {$numin} é {$fatorial} <br>O calculo realizado foi: <br>{$saida}</h3>";
				}
			?>
		</div>
	</div>
</body>
</html>