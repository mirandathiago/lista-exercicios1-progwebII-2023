<?php

    $valor = $_POST['value'] ?? 1;
    
    $fatorial = 1;
    if($valor == 0){
        $fatorial = 1;
    }else{
        for ($i = 1; $i <= $valor; $i++) {
            $fatorial *= $i;
        }
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
				<label>Valor:
					<input type="number" id="value" name="value" required>
				</label>
        
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
                <?php echo "O fatorial de $valor é $fatorial"; ?>
		</div>
	</div>
</body>
</html>