<!--Crie um formulário que permita ao usuário informar o peso e a altura. 
Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra.
   Entrada: Peso: 70 kg, Altura: 1.70 m
        Saída: Seu IMC é 24.22, você está na faixa de peso normal.
        Entrada: Peso: 90 kg, Altura: 1.75 m
        Saída: Seu IMC é 29.39, você está na faixa de sobrepeso. -->

<!DOCTYPE html>
<html>
<head>
	<title>Formulário com PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="receber1.php" method="get">
           <h1>Calculadora de IMC (Índice de Massa Corporal):</h1>
            <label>
               Informe seu Peso: 
                <input type="number" name = "peso" step = "0.1"
                value = "60">
            </label>
            <label> 
             Informe sua Altura: 
                <input type="number" name = "altura" step = "0.01"
                value = "1.60">
            </label>
            <button>Enviar</button>
		</form>
	</div>
</body>
</html>