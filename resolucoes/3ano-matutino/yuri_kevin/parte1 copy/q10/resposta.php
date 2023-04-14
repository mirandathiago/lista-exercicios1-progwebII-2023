<?php
    $valor = $_POST["valor"] ?? 100;
    $meses = $_POST["meses"] ?? 1;

   
   for($i=0; $i<$meses; $i++){
    $valor = $valor*(1 + 0.025);
   }
    $valor = number_format($valor, 2, '.', '');
    //M = P * (1 + 0,025) ^ n
    // M é o montante acumulado ao final do período de tempo;
    // P é o principal (ou capital) inicial;
    // i é a taxa de juros expressa em decimal (por exemplo, 0,05 em vez de 5%);
    //n é o número de períodos de tempo.


?>
<!DOCTYPE html>
<html>
<head>
	<title>Questão 10 Parte 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
	<div class="box formulario">
        <h1>Resultado</h1>
		<h2>Valor total a ser pago: <?=$valor?> após os <?=$meses?> meses.</h2>
		</form>
		</div>
	</div>
</body>
</html>