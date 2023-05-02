<?php ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calcular valor da energia</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calcular desconto de 10%</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira o valor:</h2>

			<form action="index.php" method="post">
				<label>Valor do Produto:
					<input type="number" id="idvalor" name="value" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
<?php

$metodo= $_SERVER["REQUEST_METHOD"];
if($metodo=="POST")
{

 $valorProduto=$_POST["value"] ?? 0;
 $result= ($valorProduto*0.9);

 print("<p class='alerta-verde'>{$result}</p>");

}else{
			
	 }
			
?>
		</div>
	</div>
</body>
</html>