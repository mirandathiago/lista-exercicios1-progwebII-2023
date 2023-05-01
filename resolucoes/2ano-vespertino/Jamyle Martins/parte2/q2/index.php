<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculo de Consumo de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Consumo de energia em kWh:
                    <input type="number" name="energia" required>
                </label> 
                <br>
                <button class="enviar">Enviar</button>   
            </form>

            <div class="box resposta">
			<h2>Resultado</h2>
			<?php

$energia=$_POST["energia"] ?? 0;

if($energia<=100){
	$valor=$energia*0.50;
	if($valor<20){
		$valor="R$20.";
	}
	else{
		$valor;
	}
}
else if($energia>100 && $energia<=200){
	$valor=$kwh*0.70;
	
}
else{
	$valor=$energia*0.87;
	
}


	echo "<h1> o valor de é de {$valor}";
?>
			</div>	
            
             
		</div>
	</div>

</body>
</html>