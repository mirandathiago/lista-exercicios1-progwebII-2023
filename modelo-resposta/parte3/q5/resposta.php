

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
		<h1>Formulário de Emprestimo</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$valordiv = $_POST["valordiv"] ?? 1;
			$taxa = $_POST["taxa"] ?? 0;
			$pagmensal = $_POST["pagmensal"] ?? 1;

			$tempo = 0;
			$saldo = $valordiv;
			$juros = ($taxa / 100);

			while ($saldo > 0) {
				$saldo += ($saldo * $juros) - $pagmensal;
				$tempo++;
			}
				echo "Serão necessários {$tempo} meses para quitar a dívida.<br>";
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>