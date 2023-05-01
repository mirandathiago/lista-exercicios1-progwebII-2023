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
        <h1>FRUTAS</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>MARQUE FRUTAS FAVORITAS</h2>
            <form action="index.php" method="post">
            <fieldset>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas[]" value="uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>
			  <button name="enviar"> Enviar </button>
			</form>
		</div>
        <div class="box resposta">
			<?php
				
                $frutas =$_POST["frutas"] ?? [];

                foreach($frutas as $frutas){
                    echo "<h2>{$frutas}</h2>";
                }
   
			?>
        </div>
    </div>
</body>

</html>