<?php

	$num = $_POST["num"] ?? 0;
	$escolha  = $_POST["escolha"] ?? "";







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
		<h1>Questão 5 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>5- Vamos criar um jogo de par ou ímpar! Crie um formulário em que o usuário possa selecionar um número de 0 a 10 e escolher entre as opções "Par" ou "Ímpar". Ao clicar no botão "Jogar", o programa irá sortear um número entre 0 e 10, e então verificar se a soma dos números é par ou ímpar. Em seguida, o programa deve determinar quem venceu com base na escolha do usuário.</h2>
			<form action="index.php" method="post">
			
			   <label>Número Escolhido:
					<input type="number" id="num" name="num" min="0" max="10" required value="<?=$num?>">
				</label>

		
				<label>Par/Ímpar:
					<select name="escolha">
						<option></option>
						<option value="par" <?=$escolha == "par" ? "SELECTED" : ""?>>Par</option>
						<option value="impar" <?=$escolha == "impar" ? "SELECTED" : ""?>>Impar</option>						
					</select>
			   </label>

			  
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
		
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){

					$numComputador = rand(0,10);

					$soma = $num + $numComputador;

					$escolhaVencedora = ($soma % 2 == 0) ? "par" : "impar";

					if($escolha == $escolhaVencedora){
						echo "<p class='alerta-verde'>O usuário escolheu o valor de {$num} e o computador escolheu o valor de {$numComputador}. O resultado deu {$escolhaVencedora} e o Usuário venceu</p>";

					}else{
						echo "<p class='alerta-vermelho'>O usuário escolheu o valor de {$num} e o computador escolheu o valor de {$numComputador}. O resultado deu {$escolhaVencedora} e o Computador venceu</p>";
					}


					

				}




			?>


		</div>
	</div>
</body>
</html>