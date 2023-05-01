<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
		<h1>Formulário de Frutas Favoritas</h1>
	</header>

	<div class="container">
		<div class="box formulario">
        <h2>Escolha suas frutas favoritas:</h2>

    <form method="post" action="questao1.php">

	    <input type="checkbox" name="frutas[]" value="banana"> Banana<br>
	    <input type="checkbox" name="frutas[]" value="maça"> Maçã<br>
	    <input type="checkbox" name="frutas[]" value="laranja"> Laranja<br>
	    <input type="checkbox" name="frutas[]" value="uva"> Uva<br>
	    <input type="checkbox" name="frutas[]" value="manga"> Manga<br>

	    <br><br>

	    <button name="enviar"> Enviar </button>

    </form>

		</div>
	</div>
    <?php

	if($_POST['frutas']){

		$frutas = $_POST['frutas'];

		foreach($frutas as $frutas){
			echo $frutas."<br>";
		}

	}

?>






</body>
</html>