<?php
	$fatorial = $_POST["fatorial"] ?? "";

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
		<h1>Fatorial calculadora</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form arction="index.php" method="post">
				<label>Entre com um número:
					<input type="number" name="fatorial" required value="<?=$fatorial?>">
				</label> 
				<button> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php $metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$calculadora = 1;
					for(;$fatorial > 0; $fatorial--){
						$calculadora *= $fatorial;
					}
					?>
			<h2><?=$calculadora?></h2>
			<?php }else{
				print("Envie o formulário!");
			}?>
		</div>
	</div>
</body>
</html>