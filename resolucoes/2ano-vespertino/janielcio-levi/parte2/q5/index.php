<?php
	$PLAYnum = $_POST["num"] ?? 0;
	$PLAYescolha = $_POST["escolha"] ?? 0;
	if ($PLAYescolha == "Impar") {
		$PCescolha = "Par";
	}else {
		$PCescolha = "Impar";
		$PLAYescolha = "Par";
	}

	$PCnum = rand(0,10);

	$soma = $PCnum + $PLAYnum;

	if($soma % 2 == 0){
		$ganhou = "Par";
	}else{
		$ganhou = "Impar";
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
		<h1>Jogo "Impar ou Par"</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Se prepare para a Batalha:</h2>
			<form action="index.php" method="post">
				<label>Insira um numero:
					<input type="number" id="numero" name="num" max="10" min="0" required>
				</label>
				<label>
					Escolha entre par ou impar:
					<select name="escolha">
						<option value="Impar">Impar</option>
						<option value="Par">Par</option>
					</select>
				</label>
				<button name="jogar"> Jogar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					if ($ganhou == $PLAYescolha) {
						echo "<p class='alerta-verde'>O usuario escolheu {$PLAYescolha} e o numero {$PLAYnum}. O computador sorteou o numero {$PCnum}, e a soma deles é {$soma}. {$soma} é {$ganhou} e o jogador venceu!!</p>";
					}elseif ($ganhou == $PCescolha) {
						echo "<p class='alerta-vermelho'>O usuario escolheu {$PLAYescolha} e o numero {$PLAYnum}. O computador sorteou o numero {$PCnum}, e a soma deles é {$soma}. {$soma} é {$ganhou} e o computador venceu!!</p>";
					}
					
				}
			?>
		</div>
	</div>
</body>
</html>