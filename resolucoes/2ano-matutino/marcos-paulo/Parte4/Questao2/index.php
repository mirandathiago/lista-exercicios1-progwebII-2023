<?php
/*
    Questão 33 da lista, Parte 4.

Em uma pizzaria, os clientes têm a opção de escolher diferentes sabores de pizza.
Crie um formulário que permita que o cliente selecione os sabores desejados utilizando checkboxes.
Em seguida, processe os dados submetidos e exiba a lista de sabores selecionados utilizando um loop foreach.
Certifique-se de que a lista seja clara e fácil de ler,
para que o cliente possa verificar suas escolhas antes de fazer o pedido.


*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questao 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1></h1>
	</header>
	<div class="container">
		<div class="box formulario">

			<form action = "receber2.php" method = "get">
                <fieldset>
                    <legend>Quais sabores de pizza gostaria de pedir?</ legend>
                        <div>
                            <input type = "checkbox" id = "peperoni" name = "pizzas[]" value = "peperoni">
                            <label for = "peperoni"> Peperoni </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "musarela" name = "pizzas[]" value = "musarela">
                            <label for = "musarela"> Musarela </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "capricciosa" name = "pizzas[]" value = "capricciosa">
                            <label for = "capricciosa"> Capricciosa </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "diavola" name = "pizzas[]" value = "diavola">
                            <label for = "diavola"> Diavola </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "margherita" name = "pizzas[]" value = "margherita">
                            <label for = "margherita"> Margherita </ label>
                        </div>

                        <div>
                            <input type = "checkbox" id = "bismarck" name = "pizzas[]" value = "bismarck">
                            <label for = "bismarck"> Bismarck </ label>
                        </div>
                </fieldset>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>
