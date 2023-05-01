<?php
    $kwh=$_POST["kwh"] ?? 0;
    $taxaminima=20;
    if($kwh<=100){
        $valorconta=0.5*$kwh;
        if($valorconta<20){
            $valorconta=$taxaminima;
        }
    }else if($kwh>100 && $kwh<=200){
        $valorconta=0.7*$kwh;
    }else if($kwh>200){
        $valorconta=0.87*$kwh;
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
		<h1>Conta de energia</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>INFORME</h2>
			<form action="index.php" method="post">
				<label> Qual o consumo de energia em kWh?
					<input type="number" id="kwh" name="kwh" required>
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                echo "<p> VALOR DA CONTA: {$valorconta} reais</p>"
            ?>

		</div>
	</div>
</body>
</html>