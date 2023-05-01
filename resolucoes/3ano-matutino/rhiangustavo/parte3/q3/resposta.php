<?php
$num1 = $_POST['ini'];
$num2 = $_POST['fin'];
$count = 0;
for ($i = $num1; $i <= $num2; $i++) {
    if ($i % 2 == 0) {
        $count++;
    }
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Início:
					<input type="number" id="ini" name="ini" required>
				</label>
                <label>Final:
					<input type="number" id="fin" name="fin" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
                <?php echo "Quantidade de números pares: {$count}"; ?>
		</div>
	</div>
</body>
</html>