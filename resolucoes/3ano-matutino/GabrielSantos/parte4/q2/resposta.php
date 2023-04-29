<?php 

	/* 
	
	 * 2- Crie um formulário com um campo do tipo textarea que permita que você adicione o nome de várias pessoas, cada uma em uma linha. Em seguida processe a informação deste formulário apresentando 1 pessoa que foi sorteada de forma aleatória pelo PHP. Para isso será necessário transformar o texto gerado em um array através da função explode e do separador “\n” que representa uma quebra de linha neste campo. Para sortear será necessário utilizar a função rand do php em que você deve passar o valor inicial e o final, sendo que o valor inicial a ser gerado deverá ser o 0 e o final a quantidade de nomes - 1, já que os índices do array devem iniciar com 0. Para verificar a quantidade de itens pode ser utilizada a função count do php.

	*/

	$texto = $_POST["texto"] ?? "";
	$nomes = explode("\n", $texto);
	$nome_sorteado = $nomes[rand(0, count($nomes) - 1)];

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<p> Segue abaixo a lista dos nomes enviados:
				<ul>
				<?php
					foreach ($nomes as $nome){
						echo "<li> {$nome} </li> ";
					}
				?>	
				</ul>

				<?="O nome sorteado foi {$nome_sorteado}"?>
			</p>

            <a href="index.php" class="index.php">Voltar</a>
		</div>
	</div>
</body>
</html>