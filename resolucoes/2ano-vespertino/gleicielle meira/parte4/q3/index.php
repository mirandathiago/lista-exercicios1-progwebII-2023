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
		<h1>Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" method="get">
			  <fieldset>
				<legend>Selecione seus sabores:</legend>
				<div>
				  <input type="checkbox" id="frango com catupiry" name="sabores[]" value="frango com catupiry">
				  <label for="frango com catupiry">Frango com catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="4 queijos" name="sabores[]" value="4 queijos">
				  <label for="4 queijos">4 queijos</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="carne seca com banana da terra" name="sabores[]" value="carne seca com banana da terra">
				  <label for="carne seca com banana da terra">Carne seca com banana da terra</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="marguerita" name="sabores[]" value="marguerita">
				  <label for="marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" id="camarão" name="sabores[]" value="camarão">
				  <label for="camarão">Camarão</label>
				</div>

			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Você escolheu:</h2>
            <?php

    

                $sabores = $_GET["sabores"] ?? [];

                foreach ($sabores as $sabor) {
                    echo "<h3>{$sabor}</h3>";
                }
               


            ?>
		</div>
	</div>
</body>
</html>