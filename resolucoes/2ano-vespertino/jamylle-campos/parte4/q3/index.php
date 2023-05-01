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
        <h1>Pizzas</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>MARQUE SEUS SABORES</h2>
            <form action="index.php" method="post">
            <fieldset>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="carne" name="sabores[]" value="carne">
				  <label for="carne">Carne</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
			  </fieldset>
			  <button name="enviar"> Enviar </button>
			</form>
		</div>
        <div class="box resposta">
			<?php
				
				$sabores = $_POST['sabores']??[];
				if($sabores==[]){
					echo "<p>Nenhum sabor selecionado</p>";
				}else{
					echo "<p> Os seguintes sabores foram escolhidos: </p><br>";
					echo "<ul>";
					foreach ($sabores as $sabor) {
					  echo "<li>" . $sabor . "</li>";
					}
					echo "</ul>";
				}
			?>
			
        </div>
    </div>
</body>

</html>