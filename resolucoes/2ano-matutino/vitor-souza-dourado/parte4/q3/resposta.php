<!DOCTYPE html>
<html>
<head>
	<title>QUESTÃO 3/ PARTE 4</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			margin-top: 0;
		}

		p {
			font-size: 1.2em;
			font-weight: bold;
			margin: 10px 0;
		}
        a{
            color: red;
        }
	</style>
</head>
<body>
	<h1>Sabores escolhidos:</h1>
	<?php
		if(isset($_POST['sabores'])){
			$sabores = $_POST['sabores'];
			foreach ($sabores as $sabor) {
				echo "<p>$sabor</p>";
			}
		} else {
			echo "<p>Nenhum sabor foi selecionado.</p>";
		}
	?>
    <br> 
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>