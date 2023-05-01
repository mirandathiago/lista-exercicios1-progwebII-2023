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
		<h1>Pizzaria</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe sabores</h2>
			<form action="index.php" method="post">
			    <fieldset>
                <div>
                  <input type="checkbox" id="calabresa" name="sabores[]" value="calabresa">
                  <label for="calabresa">Calabresa</label>
                </div>
                <div>
                  <input type="checkbox" id="portuguesa" name="sabores[]" value="portuguesa">
                  <label for="portuguesa">Portuguesa</label>
                </div>
                <div>
                  <input type="checkbox" id="queijo" name="sabores[]" value="queijo">
                  <label for="queijo">Queijo</label>
                </div>
          </fieldset>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                $sabores =$_POST["sabores"] ?? [];
                if($sabores==[]){
                    echo "Nenhum sabor selecionado, meu lindo cliente";
                  }else{
                    echo "<p>Você, meu caro cliente, selecionou os sabores:</p><br>";
                    echo "<ul>";
                    foreach ($sabores as $sabor) {
                      echo "<li>{$sabor}</li>";
                    }
                    echo "</ul>";

                  }

                

            ?>
		</div>
	</div>
</body>
</html>