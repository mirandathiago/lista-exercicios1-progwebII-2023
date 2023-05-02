<?php

	$valor = $_POST["valor"] ?? 0; 
	$escolha = $_POST["escolha"] ?? "";
	$gera = rand(0, 10);

	$soma = $valor + $gera;
	$resto = $soma % 2;

	switch ($escolha) {
		case "ímpar":
			if ($resto == 0) {
			$mensagem = "{$soma} é par o computador venceu!";
			}else {
			$mensagem = "{$soma} é ímpar e o usuario venceu!";
	};
			break;
		
		case "par":
			if ($resto == 0) {
				$mensagem = "{$soma} é par e o usuario venceu!";
				}else {
				$mensagem = "{$soma} é ímpar o computador venceu!";
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
		<h1>Jogo do Ímpar ou Par</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Selecione um número de 0 a 10</h2>
			<form action="index.php" method="post">
			  
			  <label>Números:
					<select name="valor">
						<option></option>
						<option <?= $valor == "0" ? "selected" : "" ?> value="0"> 0</option>
						<option <?= $valor == "1" ? "selected" : "" ?> value="1"> 1</option>
						<option <?= $valor == "2" ? "selected" : "" ?> value="2"> 2</option>
						<option <?= $valor == "3" ? "selected" : "" ?> value="3"> 3</option>
						<option <?= $valor == "4" ? "selected" : "" ?> value="4"> 4</option>
						<option <?= $valor == "5" ? "selected" : "" ?> value="5"> 5</option>
						<option <?= $valor == "6" ? "selected" : "" ?> value="6"> 6</option>
						<option <?= $valor == "7" ? "selected" : "" ?> value="7"> 7</option>
						<option <?= $valor == "8" ? "selected" : "" ?> value="8"> 8</option>
						<option <?= $valor == "9" ? "selected" : "" ?> value="9"> 9</option>
						<option <?= $valor == "10" ? "selected" : "" ?> value="10"> 10</option>
					</select>
			   </label>

			  <label>Ímpar ou Par:
					<select name="escolha" required>
						<option></option>
						<option <?=$escolha == "ímpar" ? "selected" : "" ?> value="ímpar">Ímpar</option>
						<option <?=$escolha == "par" ? "selected" : "" ?> value="par">Par</option>
					</select>
			   </label>

				<button name="enviar"> Jogar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			
			if ($metodo == "POST") {
				echo "<p> O usuário escolheu {$escolha} e o número {$valor}. O computador sorteou o número {$gera}, e a soma deles é {$soma}. {$mensagem}</p>" ;
			}else{
				echo "<p> Aguardando a jogada... </p>";
			}
			
			/*echo "<br>";
			var_dump($valor);
			echo "<br>";
			var_dump($escolha);
			echo "<br>";
			var_dump($gera);
			echo "<br>";
			var_dump($soma);
			echo "<br>";
			var_dump($resto);
			echo "<br>";*/
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>