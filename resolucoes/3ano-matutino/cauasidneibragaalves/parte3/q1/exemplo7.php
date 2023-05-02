
/* questao 1 da parte 3 da lista

1- O fatorial de um número é calculado pela multiplicação desse número por todos os seus antecessores até chegar ao número 1. 
Desenvolva um programa que receba como entrada através de um formulário um número inteiro e calcule o seu fatorial utilizando o comando FOR. 

O fatorial é representado por:

n! = n x (n – 1) x (n – 2) x (n – 3)!

Dica: O fatorial de 0 é igual a 1, deve-se utilizar uma estrutura condicional para verificar esta situação.

Entrada: 3

Saída: 6 

-> Cálculo realizado: 3 x 2 x 1


*/

<!doctype>
<html>

<head>

<title> Fatoraçao</title>


</head>

<body>

<form action="!!!!.php" Method="get">
<input type="number" name="variavel">
<input type="submit" Value:" Enviar">

</form>


$num = $_GET['variavel'];

$num1= $num2;
$fator=0;


while($num >=1){
    $num2 = $num2 - 1;
    $fator= $num2 * $num2;
    $num --;
    echo "$fator":
}

</body>

