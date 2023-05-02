<?php
/*
    Questão número 14 da lista, Parte 2.

    Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara.
    O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação.
    Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números.
    Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro.
    Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
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
    $a = $_GET["a"] ?? 1;
    $b = $_GET["b"] ?? 2;
    $c = $_GET["c"] ?? 0;

    $delta = ($b * $b) - 4 * $a * $c;

    $x1 = number_format((-($b) + sqrt($delta))/2*$a);
    $x2 = number_format((-($b) - sqrt($delta))/2*$a);

    if($delta < 0){
        $mensagem = "Levando em consideração o conjunto dos números reais, essa equação não possui raízes.";
    }else if($delta == 0){
        $mensagem = "O resultado é: $x1 , $x2. Sendo ambos iguais, a equação possui apenas uma raiz.";
    }else if($delta >0){
        $mensagem = "O resultado é: $x1 , $x2. Sendo ambos diferentes, a equação possui duas raízes válidas.";
    } else if ($a == ' '|| $b == ' '|| $c == ' '){
        $mensagem = "ERROR: INSIRA VALORES VÁLIDOS (CAMPOS NÃO PREENCHIDOS)";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 3</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Equação do segundo grau</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p><?=$mensagem?></p>

		</div>
	</div>
    <a href="index.php" class="link">Voltar</a>
</body>
</html>