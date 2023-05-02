<?php
	/*
	4- Crie um formulário em PHP para calcular as raízes de uma equação de segundo grau utilizando a fórmula de Bhaskara. O formulário deverá ter três campos numéricos (que podem ser positivos ou negativos): A, B e C, que correspondem aos coeficientes da equação. Ao clicar no botão "Calcular", o script deverá validar se os campos foram preenchidos e se os valores informados são números. Se algum dos campos estiver vazio ou com um valor inválido, o script deverá exibir uma mensagem de erro. Caso contrário, o script deverá calcular as raízes da equação de segundo grau utilizando a fórmula de Bhaskara e exibir os resultados.
	*/
	$a = $_POST["a"] ?? 2;
	$b = $_POST["b"] ?? 5;
	$c = $_POST["c"] ?? -3;
	$delta = $b ** 2 - 4 * $a * $c;
	$x1 = ( ($b * -1) + sqrt($delta) ) / (2 * $a);
	$x2 = ( ($b * -1) - sqrt($delta) ) / (2 * $a);
	if($delta==0){
		$mensagem = 
		"<p>A raiz da equação de segundo grau é:</p>
		<p>X:</p>
		<p class='alerta-verde'>{$x1}</p>";
	}else if($delta>0){
		$mensagem = 
		"<p>As raízes da equação de segundo grau são:</p>
		<p>X1:</p>
		<p class='alerta-verde'>{$x1}</p>
		<p>X2:</p>
		<p class='alerta-verde'>{$x2}</p>";
	}else{
		$mensagem =
		"<p class='alerta-vermelho'>A equação do segundo grau não possui raízes reais</p>";
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
		<h1>Questão 4 - Parte 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
		<h2>Informe os itens solicitados</h2>
			<form action="formulario-resposta.php" method="post">
				<label>A:
					<input type="number" name="a" required value="<?=$a?>">
				</label>

				<label>B:
					<input type="number" name="b"  required value="<?=$b?>" required>
				</label>

				<label>C:
					<input type="number" name="c" required value="<?=$c?>">
				</label>
				<button name="enviar"> Calcular </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?=$mensagem?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>