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
		<h1>Calculando sua conta de energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Digite:</h2>

        <form action= "index.php" methood = "GET">
				<label>Consumo de energia elétrica em kwh:
					<input type="number" id="consumo" name="consumo" required>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
        <?php

        $consumo = $_GET["consumo"];

        if($consumo <=20 ){
			echo"<p> O valor da energia é 20.00 R$</p>";

		}elseif($consumo <= 100){
			$valor = $consumo*0.50 +20;
			echo"<p>O valor da energia é {$valor} R$</p>";

		}elseif($consumo <= 200){
			$valor = $consumo*0.70 +20;
			echo"<p>O valor da energia é {$valor} R$</p>";

		}elseif($consumo > 200){
			$valor = $consumo*0.87+20;
			echo"<p>O valor da energia é {$valor} R$</p>";
		}

?>
			
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>