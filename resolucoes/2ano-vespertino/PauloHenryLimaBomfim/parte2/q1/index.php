<?php
    $num1 = $_POST["num1"] ?? "";
	$num2 = $_POST["num2"] ?? "";
	$num3 = $_POST["num3"] ?? "";
	$maior = $num1;
	$menor = $num1;
	if ($num1 >= $num2){
		if($num1 >= $num3){
			$maior = $num1;
		}
		else{
			$maior = $num3;
		}
	}
	else{
		if($num2 >= $num3){
			$maior = $num2;
		}
		else{
			$maior = $num3;
		}
	}
	if($num1 <= $num2){
		if($num1 <= $num3){
			$menor = $num1;
		}
		else{
			$menor = $num3;
		}
	}
	else{
		if($num2 <= $num3){
			$menor = $num2;
		}
		else{
			$menor = $num3;
		}
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
		<h1>Maior e menor de três números:</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com um número:
					<input type="number" name="num1" required value="<?=$num1?>">
				</label>
				<label>Entre com um número:
					<input type="number" name="num2" required value="<?=$num2?>">
				</label>
				<label>Entre com um número:
					<input type="number" name="num3" required value="<?=$num3?>">
				</label>
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){?>
			<h2>Menor número: <?=$menor?> e o Maior número: <?=$maior?></h2>
			<?php }else{
				print("Envie o formulário!");
			}?>
			
		</div>
	</div>
</body>
</html>