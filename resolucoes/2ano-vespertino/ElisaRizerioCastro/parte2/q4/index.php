<!DOCTYPE html>
<!--Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
!
-->
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h2>Formulário para esquação de 2 grau</h1>
		<!-- criei o form utilizando o método post e enviando  o preço informado para o php-->
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe as seguintes questões</h2>
			<form action="resposta.php" method="post">
				<label>O valor de A:
					<input type="number" id="A" name="a" required>
				</label>
				<label>O valor de B:
					<input type="number" id="B" name="b" required>
				</label>
				<label>O valor de C:
					<input type="number" id="C" name="c" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>