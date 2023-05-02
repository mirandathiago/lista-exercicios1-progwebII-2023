<?php 
$fator = $_POST["fator"] ?? 0;
//for($i=0; $i>=1; $i++){
	



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
		<h1>FATORIAL</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao1.php" method="post">
				
				<label>Valor:
					<input type="number" name="fator" value="<?=$fator?>" required>
				</label>
								
				<button name="calcular"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           
		   <?php
		   $calculo=1;
		   echo "{$fator}";
		   while($fator > 1){
			
			
	$calculo *= $fator;
	$fator--;
	echo " x {$fator} ";
}
	
			if($fator == 0){
            echo "1";
			
		} else {
			echo " = {$calculo}";
		}
			
			
			?>
		</div>
	</div>
</body>
</html>