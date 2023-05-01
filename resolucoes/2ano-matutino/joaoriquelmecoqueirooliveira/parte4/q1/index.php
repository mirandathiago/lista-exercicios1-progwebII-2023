<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 1 Parte 4</title>
</head>

<body>
    <header>
        <h1>Lista de Frutas</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Escolha as frutas do seu gosto</h2> <br>
            <form action="index.php" method="get">
            <fieldset>
				<legend>Frutas</legend>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="banana">
				  <label for="banana">Banana</label>
				</div>
                <div>
				  <input type="checkbox" id="tomate" name="frutas[]" value="tomate">
				  <label for="Tomate">Tomate</label>
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
                <button>Enviar</button>
            </form>
        </div>
        <div class="box resposta">
            <h2>Resposta</h2> <br>
            <?php
                $frutas = $_GET["frutas"] ?? [];
                foreach($frutas as $fruta){
                    echo "<h3>{$fruta}</h3>";
                }
            ?>
        </div>
    </div>
</body>

</html>