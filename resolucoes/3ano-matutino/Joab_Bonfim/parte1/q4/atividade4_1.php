<?php
    $d = $_POST["distancia"];

    $consum = $d / 10;

    $mens = "A quantidade de gasolina nescessária para realizar essa viagem de {$d}km será de {$consum}L";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Atividades</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css_comum.css">
</head>
<body>
	<header>
		<h1>Atividade 4</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Calculadora de Gastos</h2>
			<form action="atividade4_1.php" method="post">
				<label>Distância em Quilometros(Km):
                    <br>
					<input type="number" name="distancia" value="<?=$d?>" required>
				</label>
                <br>
				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Bomba de Combustível</h2>

            <?php
                //var_dump($_SERVER["REQUEST_METHOD"]);
                $met = $_SERVER["REQUEST_METHOD"];

                if($met == "POST"){
                    echo"<p>{$mens}</p>";
                }else{
                    echo"<p>Não é possivel efetuar a operação, por favor verifique o formulário de envio</p>";
                }
            
            ?>
			
		</div>
	</div>
</body>
</html>