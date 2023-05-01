<?php
    $num1 = $_POST["num1"] ?? 20;
    if($num1 <= 100){
        $num1 *= 0.5;
    }else if($num1 <= 200){
        $num1 *= 0.7;
    }else if($num1 > 200){
        $num1 *= 0.87;
    }

    if($num1 < 20){
        $num1 = 20;
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
				<label>Comsumo de Energia:
					<input type="number" id="num1" name="num1" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
                <?php echo "A valor a ser pago será de {$num1}"?>
		</div>
	</div>
</body>
</html>