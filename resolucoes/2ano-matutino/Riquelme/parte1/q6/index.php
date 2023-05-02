<?php
    $largura = $_GET["largura"] ?? 100;
    $comprimento = $_GET["comprimento"] ?? 100;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 6</title>
</head>
<body>
    <header>
	    <h1>Calcular área do terreno</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe a largura e o comprimento</h2> <br>

			<form action="index.php" method="get">
				<label>largura em metros: 
                    <input type="number" name="largura" step="0.01" value="<?=$largura?>" required>
                </label>
                <label>comprimento em metros: 
                    <input type="number" name="comprimento" step="0.01" value="<?=$comprimento?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
        
        <div class="box resposta">
            <h2>Resposta</h2>
            <?php
                $area = $largura * $comprimento;
            ?>
            <h2><?=$area?> m<sup>2</sup></h2>
        </div>
	</div>
</body>
</html>