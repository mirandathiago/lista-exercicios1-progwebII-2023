<?php
 /*
   3- Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza. 
   Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes. 
   Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach. 
   Certifique-se de que a lista seja clara e fácil de ler, para que o cliente possa verificar suas escolhas antes de fazer o pedido.
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores de Pizza</title>
</head>
<body>
	<header>
		<h1>Escolha os Sabores:</h1>
	</header>
			<form action="index.php" method="post">
			  <fieldset>
				<h2> Selecione seus sabores:</h2>
				<div>
				  <input type="checkbox" id="frango" name="sabores[]" value="frango">
				  <label for="frango">Frango</label>
				</div>
				<div>
				  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
				  <label for="calabresa">Calabresa</label>
				</div>
				<div>
				  <input type="checkbox" id="mussarela" name="sabores[]" value="mussarela">
				  <label for="mussarela">Mussarela</label>
				</div>
				<div>
				  <input type="checkbox" id="presunto" name="sabores[]" value="presunto e queijo">
				  <label for="presunto">Presunto e Queijo</label>
				</div>
				<div>
				  <input type="checkbox" id="bacon" name="sabores[]" value="bacon">
				  <label for="bacon">Bacon</label>
				</div>
                <div>
				  <input type="checkbox" id="especial" name="sabores[]" value="especial da casa">
				  <label for="especial">Especial da Casa</label>
				</div>
                <div>
				  <input type="checkbox" id="moda" name="sabores[]" value="moda da casa">
				  <label for="moda">Moda da Casa</label>
				</div>
                <div>
				  <input type="checkbox" id="quatro" name="sabores[]" value="quatro queijos">
				  <label for="quatro">Quatro Queijos</label>
				</div>
			  </fieldset>
				<br>
				<button name="enviar"> Enviar </button>
                <br>
                <br>
			</form>

            <?php
                $sabores = $_POST["sabores"] ?? "";

                foreach($sabores as $sabores){
                    echo "<li>{$sabores}</li>";
                }
            ?>
</body>
</html>