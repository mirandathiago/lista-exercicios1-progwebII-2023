<?php
          
    $n1 = $_POST["num1"] ?? 0;          
    $n2 = $_POST["num2"] ?? 0;          
    $n3 = $_POST["num3"] ?? 0;

	$maior = 0;
	$menor = 0;

	if ($n1 > $n2 && $n1 > $n3) {
		$maior = $n1;
	} elseif ($n2 > $n1 && $n2 > $n3) {
		$maior = $n2;
	} else {
		$maior = $n3;
	}

	if ($n1 < $n2 && $n1 < $n3) {
		$menor = $n1;
	} elseif ($n2 < $n1 && $n2 < $n3) {
		$menor = $n2;
	} else {
		$menor = $n3;
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
		<h1>Gerador de Números Ímpares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post" id="formulario">
				<label>Número 1:
					<input type="number" name="num1" value="<?=$n1?>" required>
				</label>
				<label>Número 2:
					<input type="number" name="num2" value="<?=$n2?>" required>
				</label>
				<label>Número 3:
					<input type="number" name="num3" value="<?=$n3?>" required>
				</label>
            

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resultado</h2>
			<div class="alerta-verde">Menor Número: <?=$menor?> e o Maior Número: <?=$maior?></div>
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