<?php

/*A Taxa de Metabolismo Basal (TMB) é a quantidade mínima de energia que uma pessoa precisa para sobreviver,
 mesmo estando em repouso absoluto. Ela é influenciada por fatores como idade, peso, altura e gênero. 
 Para calcular a TMB, podemos utilizar uma fórmula que leva em consideração esses fatores. 
 Crie um formulário em HTML que permita ao usuário inserir as seguintes informações: idade (em anos), 
 peso (em kg), altura (em cm) e gênero (masculino ou feminino). 
 Em seguida, crie um script em PHP que calcule a taxa de metabolismo basal (TMB) do usuário, 
 utilizando a seguinte fórmula:
Utilize a estrutura Switch Case para verificar qual fórmula será utilizada dependendo do gênero preenchido pela pessoa.
Para homens: TMB = 88,36 + (13,4 x peso em kg) + (4,8 x altura em cm) - (5,7 x idade em anos)
Para mulheres: TMB = 447,6 + (9,2 x peso em kg) + (3,1 x altura em cm) - (4,3 x idade em anos)

Exemplo de entrada:Nome: João, Idade: 30 anos, Peso: 70 kg, Altura: 170 cm, Gênero: Masculino
Exemplo de saída:
João a sua taxa de metabolismo basal (TMB) é de aproximadamente 1661.48 calorias por dia.
 */

	$nome = $_GET["nome"] ?? "";
	$idade = $_GET["idade"] ?? "";
	$altura = $_GET["altura"] ?? "";
	$peso = $_GET["peso"] ?? "";
	$sexo = $_GET["sexo"] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Taxa de Metabolismo Basal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe</h2>
			<form action="index.php" method="get">
				<label>Nome:
					<input type="text" id="nome" name="nome" value="<?=$nome?>" required>
				</label>

				<label>Idade:
					<input type="number" id="number" name="idade" min="0" value="<?=$idade?>" required>
				</label>

				<label>Altura (cm):
					<input type="number" id="number" name="altura" min="0" value="<?=$altura?>" required>
				</label>

				<label>Peso (kg):
					<input type="number" id="number" name="peso" min="0" value="<?=$peso?>" required>
				</label>

			   <fieldset>
				<p>Sexo:</p>
				<div>
				  <input type="checkbox" id="masculino" name="sexo" value="M">
				  <label for="masculino">Masculino</label>
				</div>
				<div>
				  <input type="checkbox" id="feminino" name="sexo" value="F">
				  <label for="feminino">Feminino</label>
				</div>
			  </fieldset>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$metodo = $_SERVER["REQUEST_METHOD"];
			if($metodo == "GET"){
				switch($sexo){
					case "M":
						$taxa = 88.36 + ((13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade));
						echo "$nome, sua taxa de metabolismo é de aproximadamente $taxa calorias por dia. <br>";
						break;
					case "F":
						$taxa = 447.6 + (((9.2 * $peso) + (3.1 * $altura)) - (4.3 * $idade));
						echo "$nome, sua taxa de metabolismo é de aproximadamente $taxa calorias por dia. <br>";
						break;
					}}else{
				echo "<p>Aguardando Informação</p>";}
			?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>