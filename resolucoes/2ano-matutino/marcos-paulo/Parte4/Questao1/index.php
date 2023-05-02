<?php
    /*
    Questão Número 31 da lista, Parte 4.

    Escreva um formulário que tenha um campo do tipo checkbox que permita que sejam marcadas as frutas favoritas de um usuário.
    (Devem existir ao menos 5 frutas para serem escolhidas).
    Em seguida processe a informação deste formulário utilizando o comando For Each para apresentar as frutas que foram escolhidas. 
    */
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1></h1>
	</header>
	<div class="container">
		<div class="box formulario">

			<form action = "receber1.php" method = "get">
                <fieldset>
                    <legend>Quais suas frutas favoritas?</ legend>
                        <div>
                            <input type = "checkbox" id = "abacaxi" name = "fruta[]" value = "abacaxi">
                            <label for = "abacaxi"> Abacaxi </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "abacate" name = "fruta[]" value = "abacate">
                            <label for = "abacate"> Abacate </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "ameixa" name = "fruta[]" value = "ameixa">
                            <label for = "ameixa"> Ameixa </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "banana" name = "fruta[]" value = "banana">
                            <label for = "banana"> Banana </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "cereja" name = "fruta[]" value = "cereja">
                            <label for = "cereja"> Cereja </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "manga" name = "fruta[]" value = "manga">
                            <label for = "manga"> Manga </ label>
                        </div>
                </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>