<?php
    $metodo = $_SERVER["REQUEST_METHOD"];
    $segundos = $_POST["segundos"] ?? "";
    $s = 0;
    $m = 0;
    $h = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 6 Parte 3</title>
</head>
<body>
    <header>
	    <h1>Fábrica Produtos incríveis</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe o tempo total em segundos para a conversão no formato (h:m:s)</h2> <br>
			<form action="index.php" method="post">
                <label>Segundos:
                    <input type="number" name="segundos" required value="<?=$segundos?>">
                </label>
                <button>Enviar</button>
			</form>
		</div>

		<div class="box resposta">
			<h2>Resposta</h2> <br>
            <?php
                if($metodo == "POST"){
                    while($segundos >= 3600){
                        $segundos -= 3600;
                        $h++;
                    }
                    while($segundos >= 60){
                        $segundos -= 60;
                        $m++;
                    }
                    while($segundos > 0){
                        $segundos--;
                        $s++;
                    }
                    echo "<h2>{$h}:{$m}:{$s}</h2>";
                }else{
                    echo "<h2>Aguardando valores</h2>";
                }
            ?>
		</div>
	</div>
</body>
</html>