<!DOCTYPE html>
<html>
<head>
	<title>Sorteio de Pessoas</title>
</head>
<body>
	<h1>Sorteio de Pessoas</h1>
	<form method="post">
		<label for="nomes">Digite o nome de várias pessoas, cada uma em uma linha:</label>
		<br>
		<textarea name="nomes" id="nomes" rows="10" cols="50"></textarea>
		<br>
		<input type="submit" value="Sortear">
	</form>
<?php 
	if(isset($_POST['nomes'])) { /*A função isset() é utilizada para a checagem de determinada variável quando precisamos saber se ela está vazia ou já está configurada com algum valor  */
		$nomes = explode("\n", $_POST['nomes']);
		$numNomes = count($nomes);
		$indiceSorteado = rand(0, $numNomes - 1);
		$pessoaSorteada = $nomes[$indiceSorteado];
		echo "<h2>A pessoa sorteada foi: {$pessoaSorteada} </h2>";
	}
	/*
Explicação do código:
 O formulário possui um campo textarea com o nome "nomes" e um botão de submit. Quando o formulário é enviado (método POST), o PHP recebe o valor do campo "nomes" na variável $_POST["nomes"]. Utiliza-se a função explode para transformar o texto em um array, utilizando "\n" como separador para identificar cada nome em uma linha Utiliza-se a função count para obter a quantidade de nomes no array. Gera-se um índice aleatório utilizando a função rand, sendo que o valor inicial é 0 e o valor final é a quantidade de nomes - 1.Obtém-se o nome sorteado a partir do índice gerado no passo anterior.O nome sorteado é exibido na tela utilizando a função echo.*/
 
/* A base de todos os programas foram dos documentos(php,html e css)usados em sala de aula */
?>
</body>
</html>