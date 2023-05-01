\\Questão 1
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
		
	</header>
	<div class="container">
		<div class="box formulario">

			<form action="formulario.php" method="get">

				<input type="checkbox" name="frutas[]" value="Manga">Manga<br>

				<input type="checkbox" name="frutas[]" value="Banana">Banana<br>
				
				<input type="checkbox" name="frutas[]" value="Pera">Pêra<br>
				
				<input type="checkbox" name="frutas[]" value="Morango">Morango<br>
				
				<input type="checkbox" name="frutas[]" value="Uva">Uva<br>

				<div class="box resposta">
			<h2>Resultado</h2>

            <?php 
            $frutas = $_GET["frutas"];
                if ($frutas) {
					foreach ($frutas as $fruta) {
						echo $fruta . "<br>";
					}
				}
			
			?>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>