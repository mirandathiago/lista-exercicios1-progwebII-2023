<?php
	$n1=$_POST["n1"] ?? 1;
	$n2=$_POST["n2"] ?? 1;
	$n3=$_POST["n3"] ?? 1;

	$maiornum = 0;
	$menornum = 1;

	if($n1 > $n2 && $n1 > $n3){
		$maiornum= $n1;
		$mensagem=" ";
		if($n2 > $n3){
			$menornum= $n3;
		}else{
			$menornum= $n2;
		}
	}else if($n2 > $n1 && $n2 > $n3){
		$maiornum= $n2;
		$mensagem=" ";
		if($n1 > $n3){
			$menornum= $n3;
		}else{
			$menornum= $n1;
		}
	}else if($n3 > $n1 && $n3 > $n2){
		$maiornum= $n3;
		$mensagem=" ";
		if($n2 > $n1){
			$menornum= $n1;
		}else{
			$menornum= $n2;
		}
	}else if($n1 == $n2 && $n3 == $n2){
		$menornum= $n1;
		$maiornum= $n3;
		$mensagem="Os números são iguais";
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
		<h1>Comparador de números</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite os números que deseja comparar</h2>
			<form action="index.php" method="post">
				<label>Número 1:
					<input type="number" id="n1" name="n1" required value="<?=$n1?>">
				</label>
				
				<label>Número 2:
					<input type="number" id="n1" name="n2" required value="<?=$n2?>">
				</label>

				<label>Número 3:
					<input type="number" id="n1" name="n3" required value="<?=$n3?>">
				</label>
				
				<button name="enviar"> Comparar </button>
			</form>

		</div>

		<div class="box resposta">
		<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					echo "<h2>Ordem de tamanho dos números:</h2>";
					echo"<p class='alerta-verde'>$mensagem</p>";
					echo "<p class='alerta-verde'>O maior número foi {$maiornum}</p>";
					echo "<p class='alerta-verde'>O menor número foi {$menornum}</p>";
				}
		?>

            <a href="index.php" class="link">Limpar</a>
		</div>
	</div>
</body>
</html>