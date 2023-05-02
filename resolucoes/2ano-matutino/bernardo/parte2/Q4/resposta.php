<!--4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
Exemplo de entrada:
A = 2
B = 5
C = -3
Exemplo de saída:
As raízes da equação de segundo grau são: x1 = 0.5 e x2 = -3.
Lembre-se que a fórmula de Bhaskara é dada por:
x= -b +- √Δ /2a
Sendo que: 
Δ = b²-4ac
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">

<?php
		$a = $_POST["a"] ?? 0;
		$b = $_POST["b"] ?? 0;
		$c = $_POST["c"] ?? 0;
		$metodo = $_SERVER["REQUEST_METHOD"]; //é usado para exibir o método de solicitação da página.


			if($metodo != "POST"){ //se o metodo for diferente de post a saída vai ser ERRO
				echo "ERRO";
			}else{
					$delta = $b*$b - 4*$a*$c; //Δ = b²-4ac
					$x1 = ($b*(-1) + sqrt($delta)) / (2*$a); //x1= -b + √Δ /2a
					$x2 = ($b*(-1) - sqrt($delta)) / (2*$a); //x2= -b - √Δ /2a

					if($delta < 0){ //Se o delta for menor que 0, a equação não possui raízes reais.
						echo "A Equação não possui raizes reais.";
					}else if($delta == 0){ //Se o delta for igual a 0, a equação possui uma única raiz real.
						echo "A Equação so possui uma raiz: {$x1}.";
					}else{ //Se o delta for maior que 0, a equação possui duas raízes reais.
						echo "Raizes da Equação:<br><br> x1 = {$x1}<br> x2 = {$x2}<br>";
					}
			}

?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>