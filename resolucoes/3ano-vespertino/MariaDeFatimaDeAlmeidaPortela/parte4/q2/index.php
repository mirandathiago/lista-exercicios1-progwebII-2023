<?php
	$names = $_POST['names'];
	$list = explode("\n", $names);

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
		<h1>Lista de nomes!</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Lista de Nomes</h2>
			<form action="formulario-resposta.php" method="post">
				<label>Insira os nomes para a lista! (quebra a linha por obsequio):
					<textarea id="mensagem" name="nomes" required></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$Nrand = rand(0, (count($list)-1));
			echo "O nome escolhido foi ; " . $list[$Nrand];
			
			?>
            <a href="" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>