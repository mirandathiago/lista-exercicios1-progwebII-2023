<!DOCTYPE html>
<html>
<head>
     <!--1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 
    O fatorial é representado por:
    n! = n x (n – 1) x (n – 2) x (n – 3)!
    Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.
    Entrada: 3
    Saída: 6 
    -> Cálculo realizado: 3 x 2 x 1-->
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fatoramento de um Número</h2>
			<form action="resposta.php" method="post">
				<label>Numero:
					<input type="number"  name="numero" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>