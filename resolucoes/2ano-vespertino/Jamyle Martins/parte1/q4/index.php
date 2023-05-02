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
		<h1>Calculadora em PHP</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora</h2>
			<form action="index.php" method="post">
				<label>entre com a Distãncia a percorrer:
					<input type="number" name="num1" required value="<?=$num1?>">
				</label>
				<label>Entre com o cunsumo médio de combustível:
					<input type="number" name="num2" required value="<?=$num2?>">
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			 <?php 

			$num1 = $_POST["num1"] ?? 0;//é para resgatar o valor do campo
			$num2 = $_POST["num2"] ?? 1;
			$combustivel = $num1 / $num2;

            echo "<h2> Quantidade de combustivel necessária é de {$combustivel} litros"
             ?>
		</div>
	</div>
</body>
</html>
