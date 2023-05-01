<!DOCTYPE html>
<html>
<head>
<!-- 4- Joãozinho está estudando matemática e precisa saber qual é o resultado da soma dos números de 1 a N.
Crie um formulário que permita ao usuário informar um número inteiro N e, utilizando um laço de repetição do tipo for, calcule a soma dos números de 1 a N.
Exemplo de entrada:
N: 5
Exemplo de saída: Soma dos números de 1 a 5: 15
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
            <form action="resposta.php" method="post">
				<h2>Somas dos  Números de 1 a N</h2>
				<label>Valor de N:
					<input type="number"  name="num1" required>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>


	</div>
</body>
</html>