<?php
    $peso = $_GET["peso"] ?? 70;
    $altura = $_GET["altura"] ?? 1.70;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 8 Parte 2</title>
</head>
<body>
    <header>
	    <h1>Índice de Massa Corporal</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os valores necessários para cálcular o IMC:</h2> <br>
			<form action="index.php" method="get">
                <label>Peso em Kg:
                    <input type="number" name="peso" step="0.1" value="<?=$peso?>" required>
                </label>
                <label>Altura em metros:
                    <input type="number" name="altura" step="0.01" value="<?=$altura?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2> <br>
			<?php
                $imc = $peso / ($altura * $altura);
                if($imc < 18.5){
                    echo "<h2>IMC = {$imc}<br>Abaixo do peso</h2>";
                }else if($imc >= 18.5 && $imc < 24.9){
                    echo "<h2>IMC = {$imc}<br>Peso normal</h2>";
                }else if($imc >= 24.9 && $imc < 29.9){
                    echo "<h2>IMC = {$imc}<br>Acima do peso</h2>";
                }else if($imc >= 29.9 && $imc < 34.9){
                    echo "<h2>IMC = {$imc}<br>Obesidade grau 1</h2>";
                }else if($imc >= 34.9 && $imc < 39.9){
                    echo "<h2>IMC = {$imc}<br>Obesidade grau 2</h2>";
                }else{
                    echo "<h2>IMC = {$imc}<br>Obesidade grau 3</h2>";
                }
			?>
		</div>
	</div>
</body>
</html>