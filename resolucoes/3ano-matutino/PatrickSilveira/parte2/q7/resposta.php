<?php
    /*
	7-  A Taxa de Metabolismo Basal (TMB) é a quantidade mínima de energia que uma pessoa precisa para sobreviver,
	mesmo estando em repouso absoluto. 
	Ela é influenciada por fatores como idade, peso, altura e gênero. 
	Para calcular a TMB, podemos utilizar uma fórmula que leva em consideração esses fatores. 
	Crie um formulário em HTML que permita ao usuário inserir as seguintes informações: 
		idade (em anos), peso (em kg), altura (em cm) e gênero (masculino ou feminino). 
	
	Em seguida, crie um script em PHP que calcule a taxa de metabolismo basal (TMB) do usuário, 
	utilizando a seguinte fórmula:
		Utilize a estrutura Switch Case para verificar qual fórmula será utilizada dependendo do gênero 
		preenchido pela pessoa.
			Para homens: TMB = 88,36 + (13,4 x peso em kg) + (4,8 x altura em cm) - (5,7 x idade em anos)
			Para mulheres: TMB = 447,6 + (9,2 x peso em kg) + (3,1 x altura em cm) - (4,3 x idade em anos)

		Exemplo de entrada:Nome: João, Idade: 30 anos, Peso: 70 kg, Altura: 170 cm, Gênero: Masculino
		Exemplo de saída:
			João a sua taxa de metabolismo basal (TMB) é de aproximadamente 1661.48 calorias por dia.

    */

	$nome = $_POST["nome"];
	$idade = $_POST["idade"] ?? 30;
	$peso = $_POST["peso"] ?? 60;
	$altura = $_POST["altura"] ?? 160;
    $genero = $_POST["sexo"] ;

	switch($genero){
		case"masculino":
			$tbm = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade);
		break;
		case"feminino":
			$tbm = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade);
		break;
		default:
			$mensagem = "Volte e preencha os campos corretamente";
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
		<h1>Taxa de Metabolismo Basal (TMB)</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2><?="{$nome}"?> a  sua taxa de metabolismo basal (TMB) é de aproximadamente <?="{$tbm}"?> calorias por dia.</h2>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>