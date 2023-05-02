<?php
    $consumo = $_GET["consumo"] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 2 Parte 2</title>
</head>
<body>
    <header>
	    <h1>Calcular valor de consumo de energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe o consumo de energia:</h2> <br>
			<form action="index.php" method="get">
				<label>Valor do consumo em Kwh: 
                    <input type="number" name="consumo" value="<?=$consumo?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                $valor = 1;
                if($consumo <= 100){
                    $valor = 0.5 * $consumo + 20;
                }else if($consumo > 100 && $consumo <= 200){
                    $valor = 0.7 * $consumo + 20;
                }else{
                    $valor = 0.87 * $consumo + 20;
                }
                if($valor < 20){
                    $valor = 20;
                }
			?>
            <h2>O valor final é de R$ <?=$valor?></h2>

		</div>
	</div>
</body>
</html>