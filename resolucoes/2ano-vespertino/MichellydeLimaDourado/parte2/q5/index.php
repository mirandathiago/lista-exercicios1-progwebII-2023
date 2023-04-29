<?php

	$opcao = $_POST["opcao"] ?? "par";

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
		<h1>Questão 5</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Impar ou Par</h2>
			<form action="index.php" method="post">
				
				<label>Informe o número:
					<input type="number" id="numero" name="numero" required min="0" max="10">
				</label>
				<label>Escolha:
					<select name="opcao">
						<option <?=$opcao=="par"?"selected":""?> value="par">Par</option>
						<option <?=$opcao=="impar"?"selected":""?> value="impar">Impar</option>
					</select>
				</label>

				<button name="enviar"> Jogar </button>
			</form>
		</div>	
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<?php
			
			$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$numero = $_POST["numero"];
					$sorteado = rand(0,10);
					$soma = $numero + $sorteado;
					if($soma % 2 == 0){
						$resultado = "par";
					}else{
						$resultado = "impar";
					}
					if($opcao == $resultado){
						echo "<p>Você escolheu {$opcao} e o número {$numero}, o número sorteado foi {$sorteado}, a soma deu {$soma}, resultado deu {$resultado}, você ganhou!</p>";
					}else{
						echo "<p>Você escolheu {$opcao} e o número {$numero}, o número sorteado foi {$sorteado}, a soma deu {$soma}, resultado deu {$resultado}, você perdeu!</p>";
					}
				}
			
			
			?>
		</div>	
	</div>
</body>
</html>