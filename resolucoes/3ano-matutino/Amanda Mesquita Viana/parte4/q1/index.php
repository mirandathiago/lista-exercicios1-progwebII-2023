<?php

	$frutas = $_POST["frutas"] ?? [];

	function check($name,$frutas)
	{
		foreach($frutas as $fruta){
			if ($fruta == $name) {
				echo "checked";
			}
		}
	}

?>

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
		<h1>Frutas favoritas</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha de frutas</h2>
			<form action="index.php" method="post" id="formulario">
			<fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="frutas[]" value="banana" <?= check("banana",$frutas)?> >
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas[]" value="morango" <?= check("morango",$frutas)?> >
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas[]" value="uva" <?= check("uva",$frutas)?>>
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas[]" value="abacaxi" <?= check("abacaxi",$frutas)?>>
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas[]" value="laranja" <?= check("laranja",$frutas)?>>
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>
            

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
				<?php
					foreach($frutas as $fruta){
						echo "<li>{$fruta}</li>";
					}
				?>
				
		</div>
	</div>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function(e) {
            $("#formulario").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "index.php",
                    type: "POST",
                    data: $(this).serialize
                })
            })
        })

    </script>
</body>
</html>