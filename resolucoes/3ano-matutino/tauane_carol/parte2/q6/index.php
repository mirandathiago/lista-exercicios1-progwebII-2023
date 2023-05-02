<?php 
	 $num1 = $_POST["num1"] ?? 0;
	 $num2 = $_POST["num2"] ?? 0;
	 $num3 = $_POST["num3"] ?? 0;
	 

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
		<h1>Estruturas Condicionais</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora</h2>
			<form action="index.php" method="post">
				<label>Número 1:
					<input type="number" name="num1" required value="<?= $num1 ?>">
				</label>
				<label>Número 2:
					<input type="number" name="num2" required value="<?= $num2 ?>">
				</label>
				<label>Número 3:

					<input type="number" name="num3" required value="<?= $num3 ?>">
				     
				</label>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php 

					if ($num1 + $num2 > $num3 && $num1 + $num3 > $num2 && $num2 + $num3 > $num1) {
   					 if ($num1 == $num2 && $num2 == $num3) {
       					echo "O triângulo é equilátero.";
    				} elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        				echo "O triângulo é isósceles.";
    				} else {
        				echo "O triângulo é escaleno.";
    				}
					} else {
    					echo "Não é possível formar um triângulo com os valores informados.";
					}
            
            ?>
		</div>
	</div>
</body>
</html>