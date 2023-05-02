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
		<h1>calculo de Baskara</h1>
	</header>
	<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';

    $hora = date('H');

    if ($hora >= 5 && $hora <= 12) {
        echo "Bom dia, $nome!";
    } elseif ($hora >= 13 && $hora <= 18) {
        echo "Boa tarde, $nome!";
    } elseif ($hora >= 19 && $hora <= 23) {
        echo "Boa noite, $nome!";
    } else {
        echo "Vá Dormir, está de Madrugada, $nome!";
    }
	}

?>

	</div>
	</div>
</body>
</html>