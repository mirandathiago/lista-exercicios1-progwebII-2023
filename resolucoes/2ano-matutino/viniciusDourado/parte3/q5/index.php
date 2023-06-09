<!--
5- Pedro está endividado e precisa saber em quanto tempo conseguirá quitar sua dívida. Ele sabe o valor da dívida, a taxa de juros mensal e quanto consegue pagar mensalmente. Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago. Com base nesses dados, calcule em quantos meses a dívida será paga e apresente o resultado ao usuário utilizando o comando WHILE.
Exemplo de entrada:
Valor da dívida: R$ 5000
Taxa de juros mensal: 2%
Valor mensal a ser pago: R$ 200
Exemplo de saída: Serão necessários 29 meses para quitar a dívida.
Dica: O tempo necessário para quitar a dívida é calculado com um laço while, que é executado enquanto a dívida não é zerada. Dentro do laço, o valor da dívida é atualizado com a aplicação dos juros mensais e a subtração do valor pago mensalmente. O tempo é incrementado a cada iteração do laço. Ao final, é exibida a quantidade de meses necessários para quitar a dívida.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dívida</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Dívida</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Tempo para pagar uma dívida</h2>
			<form action="resposta.php" method="post">
				<label>Valor da dívida:
					<input type="number" id="divida" name="divida" required>
				</label>
				<label>Taxa de juros mensal:
					<input type="number" id="juros" name="juros" required step=0.1>
				</label>
				<label>Valor mensal a ser pago:
					<input type="number" id="pago" name="pago" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>