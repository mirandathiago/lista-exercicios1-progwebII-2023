<?php
	$num = $_POST["num"] ?? 0;
	$fatorial = 1;
	$saida = "";
	$numin = $num;
	if($num != 0){
		for($num; $num>=1;$num--){
			$nums = (string)$num;
			if ($num > 1) {
				$saida .= "$nums x ";
			}else{
				$saida .= "$nums = ";
			}  
			$fatorial *= $num;
		}
		$saida .= "{$fatorial}";
		$p = 1;
	}else {
		$p = 0;
	}
	
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
		<h1>Calculo de fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Realize o Calculo</h2>
			<form action="index.php" method="post">
				<label>Insira um numero:
					<input type="number" id="num" name="num" required>
				</label>
				<button name="enviar"> Calculo </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta:</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					if($p == 1){
						echo "<h3>O fatorial de {$numin} é {$fatorial} <br>O calculo realizado foi: <br>{$saida}</h3>";
					}else{
						echo "<h3>O fatorial de {$numin} é 1";
					}
				}
			?>
		</div>
	</div>
</body>
</html>