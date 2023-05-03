<?php
/*7-  A Taxa de Metabolismo Basal (TMB) é a quantidade mínima de energia que
 uma pessoa precisa para sobreviver, mesmo estando em repouso absoluto. 
 Ela é influenciada por fatores como idade, peso, altura e gênero. 
 Para calcular a TMB, podemos utilizar uma fórmula que leva em consideração esses fatores.
  Crie um formulário em HTML que permita ao usuário inserir 
  as seguintes informações: idade (em anos), peso (em kg), 
  altura (em cm) e gênero (masculino ou feminino). 
  Em seguida, crie um script em PHP que calcule a taxa de metabolismo basal (TMB) do usuário,
   utilizando a seguinte fórmula:
Utilize a estrutura Switch Case para verificar
 qual fórmula será utilizada dependendo do gênero preenchido pela pessoa.

*/
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
		<h1>TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>TAXA DE METABOLISMO BASAL</h2>
			<form action="resposta.php" method="post">
			
			<label>Insira o nome:
					<input type="text" name="nome" required>
				</label>

				<label>Insira a Idade:
					<input type="number" name="idade" required>
				</label>

				<label>Insira o Peso:
					<input type="number" step="0.01" name="peso" required>
				</label>

				<label>Insira a Altura (em cm):
					<input type="number" step="0.01" name="altura" required>
				</label>

				<label>Marque uma opção

				<fieldset>
					<legend>Gênero </legend>

				<label>
					<input type="radio" name="sexo" value="M">
					Masculino
				</label>
				<label>
					<input type="radio" name="sexo" value="F">
					Feminino
				</label>
			  </fieldset>

				<button name="enviar"> Calcular </button>
			</form>
		</div>		
	</div>
</body>
</html>