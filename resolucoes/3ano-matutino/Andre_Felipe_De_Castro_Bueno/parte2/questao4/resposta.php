<?php 
/* 
4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. 
O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): 
A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. 
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

$A = $_POST["num1"] ?? "";
$B = $_POST["num2"] ?? "";
$C = $_POST["num3"] ?? ""; 

if(empty($A) && empty($B) && empty($C)){
    $msg = "ERRO UM OU MAIS CAMPOS ESTÃO VAZIOS";
}else if(is_numeric($A) && is_numeric($B) && is_numeric($C)){
        $delta = pow($B, 2) - (4 * $A * $C);
        if($delta < 0){
            $msg = "A equação não possuí raízes reais.";
        }else if($delta == 0){
            $x = -$B / (2 * $A);
            $msg = "Equação possui uma única raiz real que é {$x}";
        } else {
            $x = (-$B + sqrt($delta)) / (2 * $A);
            $x2 = (-$B - sqrt($delta)) / (2 * $A);   
            $msg = "A equação possui duas raízes reais que são {$x} e {$x2}";
        } 
    
}else {
    $msg = "ERRO INSIRA APENAS NÚMEROS";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de formulário com CSS estilizado</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
       <h1><?= $msg?></h1>
    </div>
</body>
</html>