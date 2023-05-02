<?php

            $cli = $_POST["cli"] ?? 1 ;
            $men = "";

            switch($cli){
                case 1:
                    $men = "Com o clima ensolarado, recomendamos ir ao Clube.";
                    break;
                case 2:
                    $men = "Com o clima ameno, recomendamos ir ao parque.";
                    break;
                case 3:
                    $men = "Com o clima chuvoso, recomendamos ir ao cinema.";
                    break;
                case 4:
                    $men = "Com o clima nublado, recomendamos ir ao museu.";
                    break;
                case 5:
                    $men = "Com o clima tempestuoso, recomendamos que fique em casa.";
                    break;
                
                default:
                    $men = "A operação selecionada não é válida";

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
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha o clima</h2>
			<form action="quest9.php" method="post">
				<label>
                    <select name="cli">

					    <option <?= $cli == "" ? "selected" : "" ?> ></option>
						<option <?= $cli == "1" ? "selected" : "" ?> value="1">Ensolarado</option>
						<option <?= $cli == "2" ? "selected" : "" ?> value="2">Ameno</option>
						<option <?= $cli == "3" ? "selected" : "" ?> value="3">Chuvoso</option>
						<option <?= $cli == "4" ? "selected" : "" ?> value="4">Nublado</option>
						<option <?= $cli == "5" ? "selected" : "" ?> value="5">Tempestuoso</option>					
					</select>
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>

		<div class="box resposta">
			<h2>Resultado</h2>
			
            <?="{$men}"?>

		</div>
	</div>
</body>
</html>