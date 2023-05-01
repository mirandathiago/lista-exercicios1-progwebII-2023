<?php
    $num1 = $_POST["num1"] ?? 1;
    $num2 = $_POST["num2"] ?? 2;
    $num3 = $_POST["num3"] ?? 3;
    $maior = $num1;
    $menor = $num1;

    if($num1 > $maior){
        $maior = $num1;
    }if($num2 > $maior){
        $maior = $num2;
    }if($num3 > $maior){
        $maior = $num3;
    }

    if($num1 < $menor){
        $menor = $num1;
    }if($num2 < $menor){
        $menor = $num2;
    }if($num3 < $menor){
        $menor = $num3;
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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Inserir Dados</h2>
			<form action="resposta.php" method="post">
				<label>Número 1:
					<input type="number" id="num1" name="num1" required>
				</label>
                <label>Número 2:
					<input type="number" id="num2" name="num2" required>
				</label>
                <label>Número 3:
					<input type="number" id="num3" name="num3" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
                <?php

                    echo "O maior número é: {$maior} ";
                    echo "O menor número é: {$menor}";

                ?>
		</div>
	</div>
</body>
</html>