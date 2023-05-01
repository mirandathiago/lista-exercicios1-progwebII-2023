<!-- O IMC (Índice de Massa Corporal) é uma medida que indica se a pessoa está dentro do peso ideal.Crie um formulário que permita ao usuário informar o peso e a altura. Com base nesses dados, calcule o IMC (Índice de Massa Corporal) e exiba em qual faixa de peso a pessoa se encontra. Utilize as seguintes faixas: 
    abaixo do peso (IMC menor que 18,5), peso normal (IMC entre 18,5 e 24,9), sobrepeso (IMC entre 25 e 29,9), obesidade grau 1 (IMC entre 30 e 34,9), obesidade grau 2 (IMC entre 35 e 39,9) e obesidade grau 3 (IMC igual ou maior que 40).
O cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas e altura é a altura em metros elevada ao quadrado.
Utilize condicionais compostas com operadores lógicos para verificar em qual faixa de peso a pessoa se encontra.
 -->
 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>IMC</title>
	<meta charset="utf-8">
    <link href="estilo.css" rel="stylesheet" >
</head>
<body>
    <div class="container"> 
		<form action="receber1.php" method="POST">
			<label>Informe a sua altura:
			  <input type="number" name="altura" step="0.01" required>
    	  </label>
          <label>Informe o seu peso:
			  <input type="number" name="peso" required>
    	  </label>
			<button>Caucular IMC</button>
		</form>
	</div>
</body>
</html>