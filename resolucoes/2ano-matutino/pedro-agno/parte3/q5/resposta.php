<?php
/*
5- Pedro está endividado e precisa saber em quanto tempo conseguirá quitar sua dívida. 
Ele sabe o valor da dívida, a taxa de juros mensal e quanto consegue pagar mensalmente. 
Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago.
 Com base nesses dados, calcule em quantos meses a dívida será paga e apresente o resultado ao usuário 
 utilizando o comando WHILE.
Exemplo de entrada:
Valor da dívida: R$ 5000
Taxa de juros mensal: 2%
Valor mensal a ser pago: R$ 200
Exemplo de saída: Serão necessários 29 meses para quitar a dívida.
Dica: O tempo necessário para quitar a dívida é calculado com um laço while, 
que é executado enquanto a dívida não é zerada. Dentro do laço, o valor da dívida
 é atualizado com a aplicação dos juros mensais e a subtração do valor pago mensalmente. 
 O tempo é incrementado a cada iteração do laço. Ao final, é exibida a quantidade de meses 
 necessários para quitar a dívida.*/

$fatura = $_POST["conta"] ?? 0;
$taxa = $_POST['taxa'] ?? 0;
$paguei = $_POST["mensal"] ?? 0;
$meses = 0;




while($fatura > 0){
		$fatura = $fatura + ($fatura * ($taxa/100)) - $paguei;
		//// atualiza o valor da dívida com a aplicação dos juros e a subtração do valor pago mensalmente
		$meses++;
		//aqui onde meses irá sendo acrescido (a cada valor pago na fatura até fatura chegar em zero);
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
		<h1>Descomplica Dividas</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p>A resposta será exibida aqui.</p>
			<p class="alerta-verde"><?php echo "Serão necessários {$meses} meses para quitar a dívida."?></p>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>