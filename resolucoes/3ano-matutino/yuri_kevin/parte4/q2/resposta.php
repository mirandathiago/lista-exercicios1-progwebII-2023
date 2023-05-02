

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
			<p><?php
				$nomes = explode("\n", $_GET["nomes"]);
				$num_nomes = count($nomes);
				$sortear = rand (0, $num_nomes -1);
				$pessoa_sorteada = $nomes[$sortear];
				echo "a pessoa sorteada foi: $pessoa_sorteada";
					
				?>
			</p>
			
		</div>
	</div>
</body>
</html>
