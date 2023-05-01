<!--  Seu João quer saber quanto vai ser a sua conta de energia no mês apenas olhando para o medidor de energia de sua residência. 
Para ajudá-lo crie um formulário que receba o consumo de energia elétrica em kW/h (quilowatts-hora). Em seguida, crie um código em PHP que
 calcule o valor da conta de energia com base nas seguintes regras:
Até 100 kWh, o valor é de R$ 0,50 por kW/h.
De 101 a 200 kWh, o valor é de R$ 0,70 por kW/h.
Acima de 200 kWh, o valor é de R$ 0,87 por kW/h.
Além disso, a conta de energia possui uma taxa mínima de R$ 20,00. Portanto, caso o valor calculado seja inferior a R$ 20,00, 
o valor a ser cobrado deve ser de R$ 20,00.
 -->
 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Idade</title>
	<meta charset="utf-8">
    <link href="estilo.css" rel="stylesheet" >
</head>
<body>
    <h1>CONSUMO DE ENERGIA</h1>
		<form action="receber1.php" method="POST">
			<label>Insira o consumo de energia (kw/h):
			  <input type="number" name="energia" required>
    	  </label>
			<button>Enviar</button>
		</form>
	</div>
</body>
</html>