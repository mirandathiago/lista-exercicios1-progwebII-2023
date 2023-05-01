\\Questão10
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

				<label> Tamanho da "escadinha"
					<input type="number" name="tamanho" required  value = "5">
				</label>
				<div class="box resposta">
            <h2>Resultado</h2>
            <?php 
              $num = $_GET["tamanho"];
                for ($i=0; $i <= $num; $i++) { 
					for ($j=0; $j < $i; $j++) { 
						echo "*";
					}
					echo "<br>";
				}
                
            ?>
			<a href="formulario.php" class="link">Voltar</a>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>