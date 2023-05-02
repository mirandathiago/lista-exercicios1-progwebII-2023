
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
		<h1>Estruturas de repetição</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Equação de segundo grau</h2>
			<form action="index.php" method="post">
				<label>Digite o valor de A:
					<input type="number" name="num1" required step="0.1"  >
				</label>
				<label>Digite o valor de B:
					<input type="number" name="num2" required step="0.1"  >
				</label>
				<label>Digite o valor de C:
					<input type="number" name="num3" required step="0.1" >
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 
				$A = $_POST["num1"] ?? 0;
				$B = $_POST["num2"] ?? 0;
				$C = $_POST["num3"] ?? 0;
				
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo =="POST"){
					if($A == 0 || $A ==""||$B == 0 || $B ==""||$C == 0 || $C ==""){
							echo "<p class='alerta-vermelho'>Insira números validos</p>";
					}else{
						$delta = $B**2 - 4*$A*$C;
						//echo "<p>$delta</p>";
							if($delta < 0){
								echo "<p class='alerta-azul'A equação não possui raízes reais</p>";
							}else if($delta == 0){
								/*Exemplo
								A =1 B =-10 C = 25
								*/
								$x1 = (-$B + sqrt($delta)) /(2*$A);
								$x2 = (-$B - sqrt($delta)) /(2*$A);
									if($x1 < 0){
										echo "<p class='alerta-verde'>Raiz real: {$x2}. A equação possui uma única raiz real</p> ";
									}else{
										echo "<p class='alerta-verde'>Raiz real: {$x1}. A equação possui uma única raiz real</p> ";
									}
							}else if($delta > 0){
									/*Exemplo
									A = 2 B = 5 C =-3
									*/
									$x1 =(-$B + sqrt($delta)) /(2*$A);
									$x2 =(-$B - sqrt($delta)) /(2*$A);
									echo "<p class='alerta-amarelo'>x1 = {$x1}, x2 = {$x2}. A equação possui duas raízes reais</p>";
										}
							}

							}else {
								echo "<p class='alerta-laranja'>Aguardando os números</p>";
							}

			?>

		<br>
            <a href="formulario-resposta.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>