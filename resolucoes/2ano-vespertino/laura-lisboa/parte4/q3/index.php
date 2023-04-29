<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Menu de Sabores</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                 <fieldset>
				<legend>Selecione seus sabores favoritos de pizza:</legend>
				<div>
				  <input type="checkbox" id="calabresa" name="sabor[]" value="calabresa"> 
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="frango" name="sabor[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="mussarela" name="sabor[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="portuguesa" name="sabor[]" value="portuguesa">
				  <label for="portuguesa">Portuguesa</label>
				</div>
				<div>
				  <input type="checkbox" id="chocolate" name="sabor[]" value="chocolate">
				  <label for="chocolate">Chocolate</label>
				</div>
				<div>
				  <input type="checkbox" id="carne" name="sabor[]" value="carne">
				  <label for="carne">Carne</label>
				</div>
			  </fieldset>
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){
                        
                    $sabor = $_POST["sabor"] ?? []; // indica que é um array de valores que será enviado pelo formulário
                    
					echo "<h2> Os sabores escolhidos foram:  <br></h2>";
					echo "<ul>";
                    foreach($sabor as $sabores){
                        echo "<li>{$sabores}</li>"; // lista todos o valores que estão no array
                    }
					echo "</ul>";
                    
				}   
            ?>        
		</div>
	</div>

</body>
</html>