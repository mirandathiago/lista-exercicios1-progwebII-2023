<?php
	$num1 = $_POST["num1"] ?? "";

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
		<h1>Soma de numeros de 1 a N</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com um número:
					<input type="number" name="num1" required value="<?=$num1?>">
				</label> 
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$contador = 0;
					for($i = 1; $i <= $num1; $i++){
						$contador += $i;
					}
			?>
			<h2>Soma de números de 1 a <?=$num1?>: <?=$contador?></h2>
			<?php
			} else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>