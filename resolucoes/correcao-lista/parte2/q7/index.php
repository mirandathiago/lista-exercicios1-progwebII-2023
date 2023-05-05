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
		<h1>Questão 7 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>7-  A Taxa de Metabolismo Basal (TMB) é a quantidade mínima de energia que uma pessoa precisa para sobreviver, mesmo estando em repouso absoluto. Ela é influenciada por fatores como idade, peso, altura e gênero. Para calcular a TMB, podemos utilizar uma fórmula que leva em consideração esses fatores. Crie um formulário em HTML que permita ao usuário inserir as seguintes informações: idade (em anos), peso (em kg), altura (em cm) e gênero (masculino ou feminino). Em seguida, crie um script em PHP que calcule a taxa de metabolismo basal (TMB) do usuário, utilizando a seguinte fórmula:
				Utilize a estrutura Switch Case para verificar qual fórmula será utilizada dependendo do gênero preenchido pela pessoa.<br>
				Para homens: TMB = 88,36 + (13,4 x peso em kg) + (4,8 x altura em cm) - (5,7 x idade em anos)<br>
				Para mulheres: TMB = 447,6 + (9,2 x peso em kg) + (3,1 x altura em cm) - (4,3 x idade em anos)
				</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" id="nome" name="nome" required value="<?=$_POST["nome"] ?? "" ?>">
				</label>
				<label>Altura (cm):
					<input type="number" id="altura" name="altura" required value="<?=$_POST["altura"] ?? "" ?>">
				</label>
				<label>Peso (kg):
					<input type="number" id="peso" name="peso" step="0.1" required value="<?=$_POST["peso"] ?? "" ?>">
				</label>
				<label>Idade:
					<input type="number" id="idade" name="idade" required value="<?=$_POST["idade"] ?? "" ?>">
				</label>

				<?php $genero = $_POST["genero"] ?? ""; ?>
				<fieldset>
					<legend>Selecione o seu Gênero:</legend>
					<div>
						<input type="radio" id="masculino" name="genero" value="masculino" <?= $genero == "masculino" ? "checked" : "" ?>>
						<label for="masculino">Masculino</label>
					  </div>
					  <div>
						<input type="radio" id="feminino" name="genero" value="feminino" <?= $genero == "feminino" ? "checked" : "" ?>>
						<label for="feminino">Feminino</label>
					  </div>
				</fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php

				if($_SERVER["REQUEST_METHOD"] == "POST"){


					$nome = $_POST["nome"];
					$idade = $_POST["idade"];
					$genero = $_POST["genero"];
					$peso = $_POST["peso"];
					$altura = $_POST["altura"];

					
					switch($genero){
						case "masculino":
							$tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
							//Para homens: TMB = 88,36 + (13,4 x peso em kg) + (4,8 x altura em cm) - (5,7 x idade em anos)<br>
					    break;
						case "feminino":
							$tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
							//Para mulheres: TMB = 447,6 + (9,2 x peso em kg) + (3,1 x altura em cm) - (4,3 x idade em anos)
						break;		

					}

					echo "<p class='alerta-verde'>O TMB de {$nome} é de {$tmb} Kilocalorias</p>";
				}




			?>


		</div>
	</div>
</body>
</html>