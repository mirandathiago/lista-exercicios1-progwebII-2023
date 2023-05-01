<?php
/*
7- Um caixa eletrônico precisa calcular a quantidade mínima de cédulas necessárias para entregar um determinado valor solicitado pelo cliente. Crie um programa que receba um valor inteiro de um formulário e calcule o menor número de notas possíveis para decompor o valor informado. Considere que as notas disponíveis são de R$100, R$50, R$20, R$10, R$5, R$2 e R$1. Ao final, mostre o valor lido e a quantidade de cada tipo de nota necessária para completar o valor. 
Exemplo de entrada: 254
Exemplo de saída:
Valor informado: R$ 254
2 nota(s) de R$100
1 nota(s) de R$50
0 nota(s) de R$20
0 nota(s) de R$10
0 nota(s) de R$5
2 nota(s) de R$2
0 nota(s) de R$1

Dica: Utilize um comando de repetição para verificar a quantidade de cada nota necessária para decompor o valor informado, e vá subtraindo esse valor do valor total até que ele seja zerado. Lembre-se de utilizar um contador para representar a quantidade de notas de cada cédula. Isso pode ser feito utilizando variáveis separadas para cada cédula. Será necessário utilizar uma estrutura condicional para determinar qual variável deve ser incrementada em cada iteração da repetição.
*/

$valor=$_GET["valor"];
$v=$valor;
$contador100=0;
$contador50=0;
$contador20=0;
$contador10=0;
$contador5=0;
$contador2=0;
$contador1=0;

while($valor>0){

	if($valor>=100){
		$valor -= 100;
		$contador100++;
	}
	else if($valor>=50){
		$valor -= 50;
		$contador50++;
	}
	else if($valor>=20){
		$valor -= 20;
		$contador20++;
	}
	else if($valor>=10){
		$valor -= 10;
		$contador10++;
	}
	else if($valor>=5){
		$valor -= 5;
		$contador5++;
	}
	else if($valor>=2){
		$valor -= 2;
		$contador2++;
	}
	else{
		$valor -= 1;
		$contador1++;
	}
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 7</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>CONTADOR DE CÉDULAS</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>Valor informado: R$ <?=$v?><br>
				<?=$contador100?> nota(s) de R$100<br>
				<?=$contador50?> nota(s) de R$50<br>
				<?=$contador20?> nota(s) de R$20<br>
				<?=$contador10?> nota(s) de R$10<br>
				<?=$contador5?> nota(s) de R$5<br>
				<?=$contador2?> nota(s) de R$2<br>
				<?=$contador1?> nota(s) de R$1</p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>