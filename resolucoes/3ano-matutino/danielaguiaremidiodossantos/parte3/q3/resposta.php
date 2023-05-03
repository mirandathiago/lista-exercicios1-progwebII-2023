<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family"rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index.css">

    <title>números pares</title>
</head>
<body>

<header>
		<h1>Formulário</h1>
</header>

<div class="container">
		<div class="box formulario">

			<h2>coloque os valores embaixo</h2>

			<form action="receber3.php" method="post">

				<label>Início:
					<input type="number" step="1" id="inicio" name="inicio" required>
				</label>

				<label>acabou:
					<input type="number" step="1" id="acabou" name="fim" required>
				</label>

				<button name="concluir"> concluir</button>
			</form>
		</div>		
	</div>
    
</body>
</html>