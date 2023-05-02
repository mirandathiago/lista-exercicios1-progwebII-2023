<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body><h1>Números pares</h1>
	</header>
    <div class="container">
		<div class="box formulario">
	<form method="post" action="">
		<label for="num1"><h3>Primeiro número:</h3></label>
		<input type="number" id="num1" name="num1">
		<label for="num2"><h3>Segundo número:</h3></label>
		<input type="number" id="num2" name="num2">
        <br>
        <br>
        <button name="enviar"> Enviar </button>
	</form>
</div>
    <div class="box resposta">
	<?php
		if(isset($_POST['num1']) && isset($_POST['num2'])){
			$num1 = intval($_POST['num1']);
			$num2 = intval($_POST['num2']);
			$count = 0;
			if($num1 > $num2){
				echo "<h3>Erro: O primeiro número deve ser menor que o segundo número.</h3>";
			}
			else{
				for($i = $num1; $i <= $num2; $i++){
					if($i % 2 == 0){
						$count++;
					}
				}
				echo "<h3>No intervalo de  $num1  a  $num2  existem $count números pares.</h3>";
			}
		}
	?>
    </div>
    </div>
</body>
</html>