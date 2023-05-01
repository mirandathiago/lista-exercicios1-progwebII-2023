<?php
	$nump = $_POST["nump"] ?? 0;
	$esq = $_POST["esq"] ?? "Impar";
	$numb = rand(0,10);
	$win = 0;
	$soma = $nump + $numb;
	if ($opc == "Impar") {
		if ((($soma) % 2) == 1) {
			$win = 1;
			$res = "Impar";
		} else {
			$res = "Par";
		}
	} else {
		if ((($soma) % 2) == 0) {
			$win = 1;
			$res = "Par";
		} else {
			$res = "Impar";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Jogo Pisi</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Jogo Legal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Impar ou par</h2>
			<form  action="index.php" method="post">
				<label>Escolha um número:
					<select name="nump">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
			   </label>
			   <label>Escolha uma Opção:
					<select name="opc">
						<option value="Impar">Impar</option>
						<option value="Par">Par</option>
					</select>
			   </label>
				<button name="enviar"> Jogar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				if($win){
					echo "<p class='alerta-verde'>O usuario escolheu $opc e o número $nump. O Computador sorteou o número $numb, e a soma deles é $soma. $soma é $res e o jogador venceu </p>";
				} else {
					echo "<p class='alerta-vermelho'>O usuario escolheu $opc e o número $nump. O Computador sorteou o número $numb, e a soma deles é $soma. $soma é $res e o computador venceu </p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>