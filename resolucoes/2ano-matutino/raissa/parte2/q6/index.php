<?php
    $lado1 = $_POST["lado1"] ?? 0;
    $lado2 = $_POST["lado2"] ?? 0;
    $lado3 = $_POST["lado3"] ?? 0;

   


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div class="container">
		<form action="questao6.php" method="post">

            <h1>Verificação Triangular</h1>

        <label>Lado 1:
		    <input type="number" name="lado1" required value="<?=$lado1?>">
	    </label>
	    <label>Lado 2:
		    <input type="number" name="lado2" required value="<?=$lado2?>">
	    </label>
        <label>Lado 3:
		    <input type="number" name="lado3" required value="<?=$lado3?>">
	    </label>

        <button name="calcular">Calcular</button>

		</form>
	</div>
    <?php
         if($lado1 == $lado2 && $lado2 == $lado3){
            echo "<p> É possível formar um triângulo equilátero.</p>";
        }elseif($lado1 == $lado2 && $lado2 != $lado3){
            echo "<p> É possível formar um triângulo isósceles.</p>";
        }elseif($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3){
            echo "<p>É possível formar um triângulo escaleno.</p>";
        }
    ?>
</body>
</html>