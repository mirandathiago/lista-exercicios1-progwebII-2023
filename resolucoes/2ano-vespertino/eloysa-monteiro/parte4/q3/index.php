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
		<h1> PIZZARIA MONTEIRO</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="POST">
			  <fieldset>
				<legend>Selecione o sabor da sua pizza:</legend>
				<div>
				  <input type="checkbox" id="Mussarela" name="pizza[]" value="Mussarela"> 
				  <label for="Mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="Calabresa" name="pizza[]" value="Calabresa">
				  <label for="Calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="Frango com catupiry" name="pizza[]" value="Frango com catupiry">
				  <label for="Frango com catupiry">Frango com catupiry</label>
				</div>
				<div>
				  <input type="checkbox" id="Portuguesa" name="pizza[]" value="Portuguesa">
				  <label for="Portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="Pepperoni" name="pizza[]" value="Pepperoni">
				  <label for="Pepperoni">Pepperoni</label>
				</div>
                <div>
                    <input type = "checkbox" id = "Carne seca" name = "pizza[]" value = "Carne seca">
                    <label for = "Carne Seca" > Carne Seca</label>
                </div>
                <div>
                    <input type = "checkbox" id = "Quatro queijos" name = "pizza[]" value = "Quatro queijos">
                    <label for = "Quatro queijps"> Quatro queijos </label>
                </div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>

            <div class = "box resposta">
            <?php

                $metodo = $_SERVER["REQUEST_METHOD"];

                if($metodo == "POST"){

                $pizza = $_POST["pizza"] ?? [];

                echo "<p class = 'alerta-verde'> Pizzas escolhidas! Aguarde o motoboy </p>";
                
                foreach($pizza as $pizza){
                    echo "<p> {$pizza} </p>";
                }
                
            }
            ?>
            </div>
</body>
</html>