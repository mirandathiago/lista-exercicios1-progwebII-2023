<?php
    $a = $_GET["lado1"] ?? "0";
    $b = $_GET["lado2"] ?? "0";
    $c = $_GET["lado3"] ?? "0";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 6 Parte 2</title>
</head>
<body>
    <header>
	    <h1>Montando um Triângulo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os valores dos lados do triângulo:</h2> <br>
			<form action="index.php" method="get">
                <label>Lado 1:
                    <input type="number" name="lado1" value="<?=$a?>" required>
                </label>
                <label>Lado 2:
                    <input type="number" name="lado2" value="<?=$b?>" required>
                </label>
                <label>Lado 3:
                    <input type="number" name="lado3" value="<?=$c?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2> <br>
			<?php
                if($a >= $b && $a >= $c){
                    if($b + $c > $a){
                        if($a == $b && $a == $c){
                            echo "<h2>É possível formar um triângulo equilátero!</h2>";
                        }else if($a == $b || $a == $c || $b == $c){
                            echo "<h2>É possível formar um triângulo isósceles</h2>";
                        }else{
                            echo "<h2>É possível formar um triângulo escaleno</h2>";
                        }
                    }else{
                        echo "<h2>Não é possível formar um triângulo com esses valores!</h2>";
                    }
                }else if($b >= $a && $b >= $c){
                    if($a + $c > $b){
                        if($a == $b && $a == $c){
                            echo "<h2>É possível formar um triângulo equilátero!</h2>";
                        }else if($a == $b || $a == $c || $b == $c){
                            echo "<h2>É possível formar um triângulo isósceles</h2>";
                        }else{
                            echo "<h2>É possível formar um triângulo escaleno</h2>";
                        }
                    }else{
                        echo "<h2>Não é possível formar um triângulo com esses valores!</h2>"; 
                    }
                }else if($c >= $b && $c >= $a){
                    if($b + $a > $c){
                        if($a == $b && $a == $c){
                            echo "<h2>É possível formar um triângulo equilátero!</h2>";
                        }else if($a == $b || $a == $c || $b == $c){
                            echo "<h2>É possível formar um triângulo isósceles</h2>";
                        }else{
                            echo "<h2>É possível formar um triângulo escaleno</h2>";
                        }
                    }else{
                        echo "<h2>Não é possível formar um triângulo com esses valores!</h2>";
                    }
                }
			?>
		</div>
	</div>
</body>
</html>