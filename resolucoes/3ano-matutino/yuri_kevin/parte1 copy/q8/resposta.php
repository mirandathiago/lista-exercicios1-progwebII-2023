<?php
$valor = $_POST["valor"] ?? 1000;
$meses = $_POST["meses"] ?? 0;

if($meses==0){
 $mensagem = "á vista";
}
else{
    $valor = $valor* 1.004;
    $mensagem = "parcelas";
}
$valor = number_format($valor, 2, '.', '');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Questão 8 Parte 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
    <h1></h1>
    <div class="container">
        <h1>Resultado</h1>
		<h2>Valor total a pagar: R$ <?=$valor?></h2>
		</form>
	</div>
</body>
</html>