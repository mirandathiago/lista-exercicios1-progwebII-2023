<?php 

$num = $_POST["numero"] ?? 0;
$i = 0;



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
		<h1>TRIANGULO</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao10.php" method="post">
				
				<label>Valor:
					<input type="number" name="numero" value="<?=$num?>" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           
		   <?php
			for ($i = 1; $i <= $num; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";}
                echo "<br>";
                }
            
            ?>
		</div>
	</div>
</body>
</html>