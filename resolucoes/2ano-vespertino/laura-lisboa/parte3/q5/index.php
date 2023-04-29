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
		<h1>Calculo de divida</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                    Valor da dívida:
                    <input type="number" name="capital" required>
                </label> 
                <br>
                <label>
                    Taxa ao mês:
                    <input type="number" name="taxa" step="0.1" required>
                </label>
                <br> 
                <label>
                    Valor mensal a ser pago:
                    <input type="number" name="valorpago" required>
                </label> 
                <button class="enviar">Enviar</button>   
            </form>

            <?php
            $metodo = $_SERVER["REQUEST_METHOD"]; 
                if($metodo == "POST"){

                    $divida = $_POST["capital"] ?? 1;
                    $taxa = $_POST["taxa"] ?? 1;
                    $valorpago = $_POST["valorpago"] ?? 1;
                    $taxa1 = $taxa / 100;
                    $acumulador = 0;
                
                    echo "<p class='alerta-verde'> Serão necessários ";
                    while($divida >= 0){
                      $divida = $divida - $valorpago;
                      $divida += $divida * $taxa1; // $divida = $divida + ($divida * $taxa1)
                      $acumulador++;  
                    }
                
                    echo "{$acumulador} meses para quitar a divida</p>";
                   
                }    
            ?>        
		</div>
	</div>

</body>
</html>