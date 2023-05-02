<?php

    $energia = $_POST["energia"] ?? 0;


    if($energia <= 100){
       $consumo = $energia * 0.5; 
    }
    else if(101 <= $energia && $energia <= 200){
        $consumo = $energia * 0.7;
    }
    else if(200 < $energia){
        $consumo = $energia * 0.87;
    }
    $consumo = max($consumo, 20); // funcao que aplica a taxa de 20 reais e retorna o maior valor entre dois números
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Calculo de Consumo de Energia</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Consumo de energia em kWh:
                    <input type="number" name="energia" required>
                </label> 
                <br>
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){

                    echo "<h2>O valor a ser pago é de: {$consumo} reais</h2>";
                }    
            ?>        
		</div>
	</div>

</body>
</html>