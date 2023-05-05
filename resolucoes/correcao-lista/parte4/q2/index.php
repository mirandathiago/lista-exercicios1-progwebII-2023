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
		<h1>Questão 2 - Parte 4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>2- Crie um formulário com um campo do tipo textarea que permita que você adicione o nome de várias pessoas, cada uma em uma linha. Em seguida processe a informação deste formulário apresentando 1 pessoa que foi sorteada de forma aleatória pelo PHP. Para isso será necessário transformar o texto gerado em um array através da função explode e do separador “\n” que representa uma quebra de linha neste campo.</h2>
			<form action="resposta.php" method="post">
				

				<label>Pessoas a serem sorteadas:
					<textarea id="pessoas" name="pessoas" required rows="10"></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>