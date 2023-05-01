<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Pizzaria</title>
	<link href="../style.css" rel="stylesheet">
	<meta name="author" content="Lauanda Nobre">
</head>
<body>
	<h1>Pizzaria</h1>
	<div class="container">
		<form action="pizzaria.php" method="post">
			  <fieldset style="padding: 10px;">
				<legend>Selecione os sabores:</legend>
				<div>
				  <input type="checkbox" name="pizzas[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="marguerita">
				  <label for="marguerita">Marguerita</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="napolitana">
				  <label for="napolitana">Napolitana</label>
				</div>
				<div>
				  <input type="checkbox" name="pizzas[]" value="quatro queijos">
				  <label for="quatro queijos">Quatro queijos</label>
				</div>
                <div>
				  <input type="checkbox" name="pizzas[]" value="muçarela">
				  <label for="muçarela">Muçarela</label>
				</div>
                <div>
				  <input type="checkbox" name="pizzas[]" value="frango com catupiry">
				  <label for="frango com catupiry">Frango com catupiry</label>
				</div>
                <div>
				  <input type="checkbox" name="pizzas[]" value="atum com cebola">
				  <label for="atum com cebola">Atum com cebola</label>
				</div>
			  </fieldset>
				<button style="padding: 5px; margin: 2px;">Enviar</button>
		</form>
	    <div class="resposta">
		    <?php
            $pizzas = $_POST["pizzas"] ?? "";

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                    #se o formulario foi enviado:
                    foreach ($pizzas as $pizza) {
                    echo"<h4>1 x {$pizza}</h4>";
                }
             }
            ?>
	    </div>
    </div>
    <style>
        .resposta{
            display: block;
        }
        h4{
            display: block;
            width: 100%;
        }
    </style>
</body>
</html>