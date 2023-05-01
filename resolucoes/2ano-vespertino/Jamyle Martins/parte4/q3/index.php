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
		<h1>Sabores de Pizza</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="index.php" methodo="get">
			  <fieldset>
				<legend>Selecione os sabores de pizza que você deseja:</legend>
				<div>
				  <input type="checkbox" id="queijo" name="sabores[]" value="queijo"><!--checkbox pode multiplas vezes -->
				  <label for="queijo">Queijo</label>
				</div>
				<div>
				  <input type="checkbox" id="carne" name="sabores[]" value="carne"><!--toda vez que voce encontrar um campo que tem multiplos valores tem que transforma ele em um array, por isso colocamos um [] em frutas-->
				  <label for="carne">Carne seca</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="uva">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
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
			<h2>pizza</h2>
            <?php
			
            $pizza = $_GET["sabores"] ?? [];//é para resgatar o valor do campo

            echo "<h2> os sabores selecionados por você foi:</h2>";
			// vai pegar de um a um do array pizza e coloca em pizza
            foreach($pizza as $pizza){
                echo "<h3> {$pizza}</h3>";
            }

            ?>
			
		</div>
	</div>
</body>
</html>