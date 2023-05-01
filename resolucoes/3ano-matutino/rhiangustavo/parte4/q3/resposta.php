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
				<label>Nomes:<br>
                <input type="checkbox" name="sabores[]" value="Mussarela">Mussarela<br>
                <input type="checkbox" name="sabores[]" value="Calabresa">Calabresa<br>
                <input type="checkbox" name="sabores[]" value="Frango com catupiry">Frango com catupiry<br>
                <input type="checkbox" name="sabores[]" value="Portuguesa">Portuguesa<br>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
                <?php
                    $sabores = $_POST["sabores"];
                    echo "<h2>Sabores selecionados:</h2>";
                    echo "<ul>";
                    foreach ($sabores as $sabor) {
                        echo "<li>$sabor</li>";
                    }
                    echo "</ul>";
                ?>
		</div>
	</div>
</body>
</html>