<?php
	$num1 = $_POST["num1"] ?? 0;
	$num2 = $_POST["num2"] ?? 0;
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
		<h1>Quantidade de números pares presentes em um intervalo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha os extremos do intervalo</h2>
			<form action="index.php" method="post">
				<label>Menor número do intervalo:
					<input type="number" id="numero" name="num1" required>
				</label>

				<label>Maior número do intervalo:
					<input type="number" id="numero" name="num2" required>
				</label>

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					$numerospares = 0;
					for($i=$num1;$i<=$num2;$i++){
						if($i % 2 ==0){
							$numerospares += 1;
						}else{
							$numerospares+=0;
						}
					}
					echo"<h2>Contador de números pares:</h2>";
					echo"<p class='alerta-amarelo'>A quantidade de números pares entre {$num1} e {$num2} é:</p>";
					echo"<p class='alerta-amarelo'>{$numerospares}</p>";
				}
			?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>