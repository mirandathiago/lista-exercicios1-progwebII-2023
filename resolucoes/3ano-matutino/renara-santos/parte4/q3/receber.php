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
		<h1>Pizzaria Narita</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Resumo do Seu Pedido:</h2>
            <?php
            $pizza=$_POST['pizza'];
            if ($pizza) {
                foreach ($pizza as $sabores) {
                    echo "<li>".$sabores."<br>";
                }
            }
            ?>
			<a href="pizza.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>         

