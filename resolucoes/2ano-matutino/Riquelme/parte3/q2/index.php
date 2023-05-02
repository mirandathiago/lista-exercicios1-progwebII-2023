<?php
    $numero = $_GET["numero"] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 2 Parte 3</title>
</head>
<body>
    <header>
	    <h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe um número inteiro</h2> <br>
			<form action="index.php" method="get">
                <label>Número:
                    <input type="number" name="numero" value="<?=$numero?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2> <br>
			<?php
                $c = 0;
                while($c <= 10){
                    $mult = $numero * $c;
                    echo "<h2>{$numero} x {$c} = {$mult}</h2>";
                    $c++;
                }
			?>
		</div>
	</div>
</body>
</html>