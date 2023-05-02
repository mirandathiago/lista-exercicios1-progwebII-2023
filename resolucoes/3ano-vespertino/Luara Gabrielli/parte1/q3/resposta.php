<?php
/*7- Pedro está estudando física e quer converter temperaturas de Celsius para Fahrenheit. Crie um formulário que receba a temperatura em Celsius. Em seguida, crie um código PHP que converta a temperatura para Fahrenheit e exiba na tela.
Dica: A fórmula para converter graus Celsius (C) para graus Fahrenheit (F) é: F = (C * 9/5) + 32
Onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.
Exemplo:
Entrada:Temperatura em Celsius: 25
Saída:Temperatura em Fahrenheit: 77°F

*/
?>


<?php
$nome= $_POST["nome"] ?? " ";
$nota1= $_POST["nota1"] ?? "";
$nota2= $_POST["nota2"] ?? "";
$nota3= $_POST["nota3"] ?? "";



$soma = ($nota1 * 2) + ($nota2 * 3) + ($nota3 * 5);
$media =  $soma / 10;
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p> A média final do aluno(a) <?=$nome;?> foi: <?=$media;?></p> <hr>
			<?php
if ($media <6) {?>
	 <p class="alerta-vermelho">Você está abaixo da média</p>
<?php } else if ($media >=6 && $media <7){?>
<p class="alerta-amarelo">Você está na média. Parabéns!</p>
<?php } else{?>
	<p class="alerta-verde">Parabéns, você está acima da média!</p>
<?php  } ?>


			

			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>