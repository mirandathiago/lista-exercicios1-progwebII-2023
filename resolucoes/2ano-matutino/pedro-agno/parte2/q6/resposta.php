<?php
/*6- Desenvolva um formulário em PHP que permita ao usuário inserir os valores dos três lados de um triângulo. O programa deve verificar se é possível formar um triângulo com os valores informados e, caso seja possível, indicar o tipo de triângulo formado.

Para que seja possível formar um triângulo, a soma dos dois lados menores deve ser maior que o lado maior. 
Caso contrário, não é possível formar um triângulo.
Após a verificação, o programa deve indicar o tipo de triângulo formado, baseado nos valores informados, 
utilizando a seguinte lógica:
Equilátero: triângulo com três lados iguais;
Isósceles: triângulo com dois lados iguais;
Escaleno: triângulo com todos os lados diferentes.
Exemplo de entrada/saída:
Entrada: lado1 = 5, lado2 = 5, lado3 = 5
Saída: É possível formar um triângulo equilátero.
Entrada: lado1 = 9, lado2 = 5, lado3 = 3
Saída: Não é possível formar um triângulo.
Entrada: lado1 = 5, lado2 = 6, lado3 = 5
Saída: É possível formar um triângulo isósceles.
Entrada: lado1 = 4, lado2 = 9, lado3 = 8
Saída: É possível formar um triângulo escaleno.*/

$area1 = $_POST["area1"] ?? 0;
$area2 = $_POST["area2"] ?? 0;
$area3 = $_POST["area3"] ?? 0;

if($area1 + $area2 < $area3){
	$triangulo = "Não foi possivel montar um triangulo";
}elseif($area1 == $area2 && $area1 == $area3){
	$triangulo = "equilatero com todos os lados iguais";
}elseif($area1 == $area2 && $area1 || $area2 =! $area3 || $area2 == $area3 && $area2 || $area3 =! $area1 || $area1 == $area3 && $area1 || $area3 =! $area2){
	$triangulo = "isosceles com dois lados iguais";
}elseif($area1 =! $area2 && $area1 =! $area3){
	$triangulo = "Escaleno com todos os lados diferentes";
}else{
	$triangulo = "";
}


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
		<h1>Geometria Online</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			
			<p class="alerta-verde"><?php echo "{$triangulo}" ?></p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>