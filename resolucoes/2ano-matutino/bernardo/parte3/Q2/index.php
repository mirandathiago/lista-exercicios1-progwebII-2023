<!DOCTYPE html>
<html>
<head>
<!--- 2- Desenvolva um programa que receba como entrada um número inteiro e calcule a sua tabuada de multiplicação utilizando o comando WHILE. Exiba a tabuada na tela.
Entrada: 7
Saída: 
Tabuada do número 7:
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
 --->
<title>Atividade da lista</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>ATIVIDADE DA LISTA TABUADA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>TABUADA</h2>
			<form action="resposta.php" method="post">
		
			<!-- OPÇÃO PRO USUÁRIO ESCOLHER -->
			<label >DIGITE UM NUMERO INTEIRO:
                <input type="number" name="num1" required>
            </label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
	</div>
</body>
</html>