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
		<h1>PIZZARIA</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
			<form action="q_stao3.php" method="get">
			  <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="mussarela" name="sabores[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="bacon" name="sabores[]" value="bacon">
				  <label for="bacon">Bacon</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="sabores[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="carne" name="sabores[]" value="carne">
				  <label for="carne">Carne</label>
				</div>
			  </fieldset>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Sabores</h2>

            <?php 
            
                 $sabores = $_GET["sabores"] ?? [];
                if($sabores == []){echo "Selecione um sabor";}
                foreach($sabores as $sabor){
                    echo "<li>{$sabor}</li>";
                }

            ?>



			
		</div>
	</div>
</body>
</html>