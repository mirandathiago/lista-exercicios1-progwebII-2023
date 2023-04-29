<?php

 	/*4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
	Exemplo de entrada:
	A = 2
	B = 5
	C = -3
	Exemplo de saída:
	As raízes da equação de segundo grau são: x1 = 0.5 e x2 = -3.
	Lembre-se que a fórmula de Bhaskara é dada por:

	Sendo que:

	E os parâmetros a serem utilizados na estrutura condicional são:
	Se o delta for menor que 0, a equação não possui raízes reais. Deve ser exibida esta mensagem.
	Se o delta for igual a 0, a equação possui uma única raiz real. Deve ser exibida a raiz real e a informação que a equação só possui uma raiz.
	Se o delta for maior que 0, a equação possui duas raízes reais. Deve ser exibida as duas raízes da equação.
	Dica: Para calcular a raiz quadrada utilize a função sqrt(numero) do php.
	*/

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
		<h1>Formulário de Calcular as raízes de uma equação de segundo grau</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<h2>Calcular as raízes</h2>

			<form action="resposta.php" method="post">

				<label>A:
					<input type="number" name="a" required>
				</label>

				<label>B:
					<input type="number" name="b" required>
				</label>
				
				<label>C:
					<input type="number" name="c" required>
				</label>


				
				<button name="Calcular"> Enviar </button>
			</form>

		</div>		
	</div>

</body>
</html>