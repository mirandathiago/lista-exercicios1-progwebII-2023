<?php
/*
6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três lados de um triângulo. 
O programa deve verificar se é possível formar um triângulo com os valores informados e, caso seja possível, indicar o 
tipo de triângulo formado.

Para que seja possível formar um triângulo, a soma dos dois lados menores deve ser maior que o lado maior. Caso contrário,
não é possível formar um triângulo.

Após a verificação, o programa deve indicar o tipo de triângulo formado, baseado nos valores informados, utilizando a seguinte lógica:
•	Equilátero: triângulo com três lados iguais;
•	Isósceles: triângulo com dois lados iguais;
•	Escaleno: triângulo com todos os lados diferentes.
Exemplo de entrada/saída:
Entrada: lado1 = 5, lado2 = 5, lado3 = 5
Saída: É possível formar um triângulo equilátero.
Entrada: lado1 = 9, lado2 = 5, lado3 = 3
Saída: Não é possível formar um triângulo.
Entrada: lado1 = 5, lado2 = 6, lado3 = 5
Saída: É possível formar um triângulo isósceles.
Entrada: lado1 = 4, lado2 = 9, lado3 = 8
Saída: É possível formar um triângulo escaleno.

*/
$n1 = $_GET["n1"] ?? 1; //recupera o valor das variáveis
$n2 = $_GET["n2"] ?? 1;
$n3 = $_GET["n3"] ?? 1;

$maior = $n1; //atribui o valor n1 como maior, para depois modificar
$menor = $n1;

if($n2 > $maior){ 			 //descobre qual o maior e menor número dos três valores						
    $maior = $n2;
}elseif($n2 < $menor){								
    $menor = $n2;
}
                                                   
if($n3 > $maior){									 
    $maior = $n3;
}elseif($n3 < $menor){ 								
    $menor = $n3;
}

$soma = ($n1 + $n2 + $n3) - $maior; // descobre a soma dos dois valores menores

if($soma < $maior){ // compara a soma dos dois menores com o maior e retorna se é possível formar um triângulo ou não
    $mensagem = "Não é possível formar um triângulo!";
}else{
    $mensagem = "verdadeiro";
}
//echo $mensagem; 
if($mensagem == "verdadeiro"){ // se for possível formar um triângulo, verifica qual o tipo do triângulo
    if($n1 == $n2 && $n1 == $n3){
        $mensagem = "É possível formar um triângulo equilatero!";
    }elseif($n1 == $n2 || $n1 == $n3){
        $mensagem = "É possível formar um triângulo isósceles!";
    }elseif($n2 == $n1 || $n2 == $n3){
        $mensagem = "É possível formar um triângulo isósceles!";
    }else{
        $mensagem = "É possível formar um triângulo escaleno!";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Triângulos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>TRIÂNGULOS</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os valores desejados</h2>
			<form action = "index.php" method = "get">				
				<label>Informe um valor:
					<input type="number" name="n1" required value = "<?=$n1?>">
				</label>
				<label>Informe outro valor:
					<input type="number" name="n2" required value = "<?=$n2?>">
				</label>
                <label>Informe mais valor:
					<input type="number" name="n3" required value = "<?=$n3?>">
				</label>		
				<button name = "botao"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            <?php
            echo "<p>{$mensagem}</p>"
            ?>		
		</div>
	</div>
</body>
</html>
