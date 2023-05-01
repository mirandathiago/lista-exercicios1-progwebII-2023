<!-- Crie um formulário com um campo do tipo textarea que permita que você adicione o nome de várias pessoas, cada uma em uma linha. Em seguida processe a informação deste formulário apresentando 1 pessoa que foi sorteada de forma aleatória pelo PHP. Para isso será necessário transformar o texto gerado em um array através da função explode e do separador “\n” que representa uma quebra de linha neste campo. Para sortear será necessário utilizar a função rand do php em que você deve passar o valor inicial e o final, sendo que o valor inicial a ser gerado deverá ser o 0 e o final a quantidade de nomes - 1, já que os índices do array devem iniciar com 0. Para verificar a quantidade de itens pode ser utilizada a função count do php. -->


<?php
$nomes = $_POST['nomes'];
$nomes = explode("\n", $nomes);
$indice = rand(0, count($nomes) - 1);
$pessoa = $nomes[$indice];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>

<body>
	<header>
		<h1>Questão 2</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Nomes de pessoas escolhido de forma aleatoria</h2>
			<form method="post" action="./index.php">
				<label>Digite vários nomes:</label>
				<textarea id="nomes" name="nomes" rows="5"></textarea>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Nomes de pessoas escolhido de forma aleatoria</h2>
			<?php
			if ($pessoa) {
				echo "<p class='alerta-verde'>A pessoa escolhida foi: {$pessoa}</p>";
			}
			?>
			<a href="" class="link">Voltar</a>
		</div>
	</div>
</body>

</html>