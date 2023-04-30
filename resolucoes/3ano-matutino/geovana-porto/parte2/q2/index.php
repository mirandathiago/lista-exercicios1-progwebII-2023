<?php


$energia = $_POST["energia"] ?? 0;

$acrescimo50 = 0.50;
$acrescimo70 = 0.70;
$acrescimo87 = 0.87;

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
		<h1>Formulário de Energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Consumo de energia</h2>
			<form action="index.php" method="post">
				<label>Energia (KWh):
					<input type="number" id="energia" name="energia" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           <hr>
			<br>
			<?php
     
     if($energia <= 100){
       $valor = $energia * $acrescimo50;
       }else if($energia <= 200 ){
        $valor = $energia * $acrescimo70;
       }else{
        $valor = $energia * $acrescimo87;
       
        }if($valor < 20){
         $valor = 20.00;
         }
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
         echo "O valor da conta de energia é: R$", $valor = number_format($valor, 2, ',', '.');
		 }
   ?>
		</div>
	</div>
</body>
</html>