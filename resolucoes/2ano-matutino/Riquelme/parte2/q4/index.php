<?php
    $a = $_GET["a"] ?? 1;
    $b = $_GET["b"] ?? 1;
    $c = $_GET["c"] ?? 1;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 4 Parte 2</title>
</head>
<body>
    <header>
	    <h1>Equação de segundo grau</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os coeficientes:</h2> <br>
			<form action="index.php" method="get">
				<label>A: 
                    <input type="number" name="a" required value="<?=$a?>">
                </label>
                <label>B: 
                    <input type="number" name="b" required value="<?=$b?>">
                </label>
                <label>C: 
                    <input type="number" name="c" required value="<?=$c?>">
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2> <br>
			<?php
                $delta = $b * $b - 4 * $a * $c;
                if($delta > 0){
                    $x1 = (-$b + sqrt($delta)) / (2 * $a);
                    $x2 = (-$b - sqrt($delta)) / (2 * $a);
                    echo "<h2>A equação tem 2 raízes reais<br>X1 = {$x1}<br>X2: = {$x2}</h2>";
                }else if($delta == 0){
                    $x1 = (-$b)  / (2 * $a);
                    echo "<h2>A equação tem 1 raíz real<br>X1 = {$x1}</h2>";
                }else{
                    echo "<h2>A equação não tem raízes reais</h2>";
                }
			?>
		</div>
	</div>
</body>
</html>