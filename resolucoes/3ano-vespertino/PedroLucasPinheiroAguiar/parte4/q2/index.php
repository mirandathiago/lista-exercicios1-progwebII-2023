<?php
	$metodo = $_SERVER["REQUEST_METHOD"];
	if($metodo == "POST"){
		$nomes = $_POST['nomes'];
		$Sep = explode("\n", $nomes);
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
		<h1>Listador de Nomes 2000</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Lista de Nomes</h2>
			<form action="index.php" method="post">
				<label>Insira os nomes (quebre a linha ao inserir outro nome):
					<textarea id="mensagem" name="nomes" required></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			if($metodo == "POST"){
				$rndN = rand(0, (count($Sep)-1));
				echo "O nome escolhido foi ; " . $Sep[$rndN];
			} else {
				echo "<p class='alerta-amarelo'>aguardando o envio</p>";
			}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>