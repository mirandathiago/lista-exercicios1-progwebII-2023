<?php

          
    $inicio = $_POST["inicio"] ?? 3;       
    $fim = $_POST["fim"] ?? 15;   
	
	$cont = 0;
	
	for ($i = $inicio; $i <= $fim; $i++) { 
		if ($i % 2 == 0) {
			$cont++;
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
		<h1>Intervalo </h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha o inicio do intervalo e o fim</h2>
			<form action="index.php" method="post" id="formulario">
				<label>Inicio:
					<input type="number" name="inicio" value="<?=$inicio?>" required>
				</label>
				<label>Fim:
					<input type="number" name="fim" value="<?=$fim?>" required>
				</label>
            
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<p>
				<?=$cont?>
			</p>
		</div>
	</div>

    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function(e) {
            $("#formulario").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "index.php",
                    type: "POST",
                    data: $(this).serialize
                })
            })
        })

    </script>
</body>
</html>