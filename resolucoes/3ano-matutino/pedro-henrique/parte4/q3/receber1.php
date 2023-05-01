<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Pizzaria Só Rock</h1>
	</header>
	<div class="container">
    <div class="box resposta">
			<h2>Recibo das suas pizzas:</h2>
            <?php
            $pizza=$_GET['pizza'];
            if ($pizza) {
                foreach ($pizza as $pizzas) {
                    echo "<li>".$pizzas."<br>";
                }
            }
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>         

