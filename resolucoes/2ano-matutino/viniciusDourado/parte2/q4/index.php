<!--
4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
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
-->
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
		<h1>Equação do Segundo Grau</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Equação do Segundo Grau</h2>
			<form action="index.php" method="post">
			<label> A:
			    <input type="number" id="a" name="a" required>
				</label>

				<label> B:
			    <input type="number" id="b" name="b" required>
				</label>

				<label> C:
			    <input type="number" id="c" name="c" required>
				</label>

				<button name="enviar"> Calcular </button>
			</form>

		</div>
		<div class="box resposta">
			<h2>Calcular</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "POST"){
				$a = $_POST["a"] ?? 1;
				$b = $_POST["b"] ?? 1;
				$c = $_POST["c"] ?? 1;
				$delta = pow($b,2) - 4 * $a * $c;
				//verifica se os campos foram preenchidos e se os valores são números
				if(!empty($a) && !empty($b) && !empty($c) && is_numeric($a) && is_numeric($b) && is_numeric($c) ){
					// verifica o valor de delta
					if($delta < 0){
						echo"<p class='alerta-vermelho'>A equação não possui raízes reais.</p>";
					}else if($delta == 0){
						$raiz = - $b / ($a * 2);
						echo"<p class='alerta-vermelho'>A equação possui uma única raiz real: {$raiz}</p>";
					}else{
						$raiz1 = (-$b +  sqrt($delta)) / (2 * $a);
						$raiz2 = (-$b -  sqrt($delta)) / (2 * $a);
						echo"<p class='alerta-vermelho'>A equação possui duas raízes reais: {$raiz1} e {$raiz2}</p>";
					}
				}
			}
        ?>
		</div>
	</div>
</body>
</html>