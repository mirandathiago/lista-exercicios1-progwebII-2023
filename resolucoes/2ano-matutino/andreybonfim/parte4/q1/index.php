<?php
 /*
   1- Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário. 
   (Devem existir ao menos 5 frutas para serem escolhidas). 
   Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. 
*/

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>
	<header>
		<h1>Frutas Preferidas</h1>
	</header>
			<form action="index.php" method="post">
			  <fieldset>
				<h2> Selecione suas frutas favoritas:</h2>
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
				<br>
				<button name="enviar"> Enviar </button>
                <br>
                <br>
			</form>

            <?php
                $frutas = $_POST["frutas"] ?? "";
                // se eu tenho um campo que tem mais de um valor tem que colocar o [] na frente do name

                foreach($frutas as $frutas){
                    echo "<li>{$frutas}</li>";
                }
            ?>
</body>
</html>