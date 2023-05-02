<!-- 2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
 --->

<!DOCTYPE html>
<html>
<head>
<title>FORMULÁRIO</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>TABUADA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>TABUADA</h2>
			<form action="resposta.php" method="post">
		
			<!-- OPÇÃO PRO USUÁRIO ESCOLHER -->
			<label >DIGITE UM NÚMERO INTEIRO:
                <input type="number" name="num1">
            </label>
				
				<button name="enviar">CALCULAR</button>
			</form>
		</div>

		</div>
	</div>
</body>
</html>