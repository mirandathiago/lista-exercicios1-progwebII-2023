<?php

    $metodo = $_SERVER["REQUEST_METHOD"];
    $num = $_POST['num'] ?? "";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>Questão 22 - Tabuada</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Veja a tabuada de um número:</h2>
			<form action="index.php" method="post">
				<label>Informe um número inteiro:
					<input type="number" name="num" min="1" required value="<?=$num?>" >
				</label>
				<button name="enviar">Ver tabuada</button>
			</form>
		</div>		
	
		<div class="box resposta">
			<h2>Resultado:</h2>
			<?php 
			if($metodo == "POST"){
				echo "<p>Tabuada do número {$num } :</p>";
				$mult = 1;
				while($mult <= 10){
					$tab = $num * $mult;
					echo "<p>{$num} x {$mult} = {$tab}</p>";
					$mult++;
				}
			}
			?>
		</div>
	</div>
</body>
</html>
