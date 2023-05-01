<?php
    $nome = $_POST["nome"] ?? "";
	$idade = $_POST["idade"] ?? "";
	$peso = $_POST["peso"] ?? "";
	$altura = $_POST["altura"] ?? "";
	$sexo = $_POST["sexo"] ?? "Masculino";
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
		<h1>TMB calculadora</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com seu nome:
					<input type="text" name="nome" required value="<?=$nome?>">
				</label>
				<label>Entre com sua idade:
					<input type="number" name="idade" required value="<?=$idade?>">
				</label>
				<label>Entre com seu peso:
					<input type="number" name="peso" required value="<?=$peso?>">
				</label>
				<label>Entre com sua altura:
					<input type="number" name="altura" required value="<?=$altura?>">
				</label> 
				<input type="radio" value="Masculino" name="sexo"> Masculino 
				<br> 
				<input type="radio" value="feminino" name="sexo"> Feminino 
				
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					if($sexo == "Masculino"){
						$tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
					}
					else{
						$tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
					}
					?>
			<h2><?=$nome?>, sua taxa metabolica basal(TMB) é de aproximadamente <?=$tmb?> calorias por dia.</h2>
			<?php }else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>