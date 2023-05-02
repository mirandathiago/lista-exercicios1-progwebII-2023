<!--Pedro está endividado e precisa saber em quanto tempo conseguirá quitar sua dívida. Ele sabe o valor da dívida, a taxa de juros mensal e quanto consegue pagar mensalmente. Crie um formulário que receba o valor de uma dívida, a taxa de juros mensal e o valor mensal a ser pago. Com base nesses dados, calcule em quantos meses a dívida será paga e apresente o resultado ao usuário utilizando o comando WHILE.
 -->
 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="box resposta">
			<h2> Dívida</h2>
            <form action = "resposta.php" method = "POST">
                <label> Insira seu nome:
                    <input type = "text" name = "nome">
                </label>
                <label> Insira o valor da dívida:
                    <input type = "number" name = "divida">
                </label>
                <label> Insira o valor da taxa:
                    <input type = "number" name = "taxa" step = "0.01">
                </label>
                <label> Insira o valor mensal a ser pago:
                    <input type = "number" name = "valorMensal">
                </label>
                <button> ENVIAR </button>
            </form>
		</div>
	</div>
</body>
</html>