<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Frutas Preferidas</title>
	<link href="../style.css" rel="stylesheet">
	<meta name="author" content="Lauanda Nobre">
</head>
<body>
	<h1>Frutas Preferidas</h1>
	<div class="container">
		<div class="box formulario">
			
			<form action="frutas.php" method="post">
			  <fieldset style="padding: 10px;">
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" name="frutas[]" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" name="frutas[]" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" name="frutas[]" value="uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" name="frutas[]" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" name="frutas[]" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>
				<button style="padding: 5px; margin: 2px;">Enviar</button>
			</form>
		</div>
		<div class="resposta">
			<?php
                $frutas = $_POST["frutas"] ?? "";

				if($_SERVER["REQUEST_METHOD"] == "POST") {
					#se o formulario foi enviado:
					foreach ($frutas as $fruta) {
						echo"<h4>{$fruta}</h4>";
				}
			}
            ?>
		</div>
	</div>
	<style>
        .resposta{
            display: block;
        }
    </style>
</body>
</html>