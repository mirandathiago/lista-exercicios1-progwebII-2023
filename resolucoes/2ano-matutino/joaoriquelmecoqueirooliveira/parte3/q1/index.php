<?php
    $numero = $_GET["numero"] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 1 Parte 3</title>
</head>
<body>
    <header>
	    <h1>Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe um número inteiro para calcular o seu fatorial</h2> <br>
			<form action="index.php" method="get">
                <label>Número:
                    <input type="number" name="numero" value="<?=$numero?>" required>
                </label>
                <button>Enviar</button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2> <br>
			<?php
                $fatorial = 1;
                if($numero == 0){
                    echo "<h2>{$numero}! = 1</h2>";
                }else{
                    for($i = 0; $i < $numero; $i++){
                        $fator = $numero - $i;
                        $fatorial *= $fator;
                        if($i != $numero - 1){
                            echo "{$fator} x ";
                        }else{
                            echo "{$fator} = ";
                        }
                    }
                    echo "<h2>{$fatorial}</h2>";
                }
			?>
		</div>
	</div>
</body>
</html>