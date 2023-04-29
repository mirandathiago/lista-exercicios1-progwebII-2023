<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	$NumP = $_POST["NumP"] ?? 0;
	$Opc = $_POST["Opc"] ?? "Impar";
	$NumB = rand(0,10);
	$Vit = 0;

	if ($Opc == "Impar") {  				#Jogador Enviou Impar
		if ((($NumP + $NumB) % 2) == 1) {
			$Vit = 1;
			$Res = "Impar";
		} else {
			$Res = "Par";
		}
	} else { 								#Jogador Enviou Par
		if ((($NumP + $NumB) % 2) == 0) {
			$Vit = 1;
			$Res = "Par";
		} else {
			$Res = "Impar";
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Impar ou Par mt Legal</h2>
			<form  action="index.php" method="post">
				<label>Escolha um número:
					<select name="NumP">
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
					<select name="Opc">
						<option value="Impar">Impar</option>
						<option value="Par">Par</option>
					</select>
			   </label>
				<button name="enviar"> Jogar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado do Jogo</h2>
			<?php
				$Som = $NumP + $NumB;
				if($metodo == "POST"){
					if($Vit){
						echo "<p class='alerta-verde'>O usuario escolheu $Opc e o número $NumP. O Computador sorteou o número $NumB, e a soma deles é $Som. $Som é $Res e o jogador venceu </p>";
					} else {
						echo "<p class='alerta-vermelho'>O usuario escolheu $Opc e o número $NumP. O Computador sorteou o número $NumB, e a soma deles é $Som. $Som é $Res e o computador venceu </p>";
					}
				} else {
					echo "<p class='alerta-amarelo'>aguardando o envio</p>";
				}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>