<?php
$valor = $_POST['valor']; //valor recebido do formulário
$notas = [100, 50, 20, 10, 5, 2, 1]; //notas disponíveis
$quantidadeNotas = array_fill(0, count($notas), 0); //array para armazenar a quantidade de cada nota

echo "Valor informado: R$ $valor <br>";

//laço para calcular a quantidade de cada nota
foreach ($notas as $i => $nota) {
  while ($valor >= $nota) {
    $quantidadeNotas[$i]++;
    $valor -= $nota;
  }
}
/*
Explicação do código :
primeiro é recebido o valor informado pelo usuário através do formulário.
Em seguida, é criado um array com as notas disponíveis e outro array com o mesmo tamanho para armazenar a quantidade de cada nota necessária para completar o valor informado. A função array_fill é utilizada para preencher o array com valores iniciais iguais a zero.
O primeiro laço foreach percorre todas as notas disponíveis e, enquanto o valor informado for maior ou igual ao valor da nota atual, é incrementada a quantidade de notas correspondente e subtraído o valor da nota do valor informado. Este processo é repetido até que o valor informado seja menor que o valor da nota atual.
Por fim, o segundo laço foreach percorre novamente todas as notas disponíveis e exibe a quantidade de notas de cada tipo que foram necessárias para completar o valor informado Nota: Este é apenas um exemplo de implementação. É importante validar e tratar possíveis erros de entrada, como valores negativos ou não numéricos, por exemplo*/
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
		<h1>Estrutura de Repetição</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
//exibindo a quantidade de cada nota
foreach ($notas as $i => $nota) {
  if ($quantidadeNotas[$i] > 0) {
    echo "<p> Contem {$quantidadeNotas[$i]} .  nota(s) de R$ {$nota} <br> ";
  }
}

/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */
			?>
		</div>
	</div>
</body>
</html>

.