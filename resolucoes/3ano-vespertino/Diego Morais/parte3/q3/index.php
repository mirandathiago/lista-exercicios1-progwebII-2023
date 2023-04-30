<?php
$valor = $_POST["valor"]?? 3;
$valor2 = $_POST["valor2"]?? 15;
$quant_par = 0;

for($i = $valor; $i <= $valor2; $i++){
    if($i % 2 == 0){
      $quant_par += 1;
    }
}

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
		<h1>Lista parte-3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Questão-03</h2>
			<form method="post" action="index.php">
				<label>Digite um valor Inicial:
					<input type="number" name="valor"  required value="<?=$valor?>">
				</label>
                
                <label>Digite um valor Final:
					<input type="number" name="valor2"  required value="<?=$valor2?>">
                </label>
				
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
          <h2>Quantidade de números pares: <?=$quant_par?></h2>
         
		</div>
	</div>
</body>
</html>