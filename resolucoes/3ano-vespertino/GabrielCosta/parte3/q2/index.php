<?php 

$num = $_POST["numero"] ?? 0;
$i=1;


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
		<h1>DESCONTO</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao2.php" method="post">
				
				<label>Valor:
					<input type="number" name="numero" value="<?=$num?>" required>
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           
		   <?php
			
            //echo "<div class='item'>Preço com desconto: R$ {$calculo}";
            while ($i <= 10){

                $calculo = $num * $i;

				
                echo "{$num} X {$i} = {$calculo} <br>";
				$i++;
                }
			?>
		</div>
	</div>
</body>
</html>