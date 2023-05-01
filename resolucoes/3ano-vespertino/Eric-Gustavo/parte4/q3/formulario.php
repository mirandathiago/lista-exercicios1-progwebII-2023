\\Questão 3
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

				<input type="checkbox" name="sabores[]" value="Calabresa">Calabresa<br>

				<input type="checkbox" name="sabores[]" value="Frango">Frango<br>
				
				<input type="checkbox" name="sabores[]" value="Moda">Moda<br>
				
				<input type="checkbox" name="sabores[]" value="Carne seca">Carne seca<br>
				
                <input type="checkbox" name="sabores[]" value="Quatro queijos">Quatro queijos<br>

				<input type="checkbox" name="sabores[]" value="Atum">Atum<br>
				
				<div class="box resposta">
			<h2>Resultado</h2>

            <?php 
            $pizzas = $_GET["sabores"];
                if ($pizzas) {
					foreach ($pizzas as $pizzas) {
						echo $pizzas . "<br>";
					}
				}
			
			?>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>