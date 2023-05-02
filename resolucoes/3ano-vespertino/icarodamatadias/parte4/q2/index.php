<?php
/*

2- Crie um formulário com um campo do tipo textarea que permita que você adicione o nome de várias pessoas, 
cada uma em uma linha. Em seguida processe a informação deste formulário apresentando 1 pessoa que foi 
sorteada de forma aleatória pelo PHP. Para isso será necessário transformar o texto gerado em um array 
através da função explode e do separador “\n” que representa uma quebra de linha neste campo. 
Para sortear será necessário utilizar a função rand do php em que você deve passar o valor inicial 
e o final, sendo que o valor inicial a ser gerado deverá ser o 0 e o final a quantidade de nomes - 1, 
já que os índices do array devem iniciar com 0. Para verificar a quantidade de itens pode ser utilizada 
a função count do php.





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
		
	</header>
	<div class="container">
		<div class="box formulario">

			<form action="resposta.php" method="get">

				<label> Informe os nomes
					<textarea name="nomes" rows="3"></textarea>
				</label>
				


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>