<?php

    $preco = $_POST["preco"] ?? 0;

    $desconto = ($preco * 10) / 100;
    $total = $preco - $desconto;

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
				<label>Preço:
					<input type="number" id="preco" name="preco" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
                <?php echo "O preço com o desconto ficou de {$total} reais"?> 
		</div>
	</div>
</body>
</html>