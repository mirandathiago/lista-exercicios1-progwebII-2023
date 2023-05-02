<?php

    $nomes = $_POST['nomes'];
    $nomesArray = explode("\n", $nomes);
    $qtde_nomes = count($nomesArray);
    $random = rand(0, $qtde_nomes-1);
    $sorteado = $nomesArray[$random];

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
		<div class="box formulario">
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Nomes:
                    <textarea name="nomes" id="nomes"></textarea>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>

                <?php echo "<p>A pessoa sorteada foi: $sorteado</p>"; ?>
			
		</div>
	</div>
</body>
</html>