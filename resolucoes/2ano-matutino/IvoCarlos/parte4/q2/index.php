<?php
        $metodo = $_SERVER["REQUEST_METHOD"];
       

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
<header>
    <h1>Questão 32 - Sorteio de Pessoas</h1>
</header>

<div class="container">
    <div class="box formulario">
        <form action="index.php" method="post">
                <h2>Sorteio de pessoas:</h2>
                <label for="nomes">Digite o nome das pessoas (um por linha):</label><br>
                <textarea name="nomes" id="nomes" rows="10" cols="50"><?php echo $_POST["nomes"] ?? ''; ?></textarea><br>
              <button name="enviar"> Sortear </button>
            </form>

    </div>
    
    <div class="box resposta">
        <h2>Pessoa sorteada:</h2>	
        <?php
            if($metodo == "POST") {
                $nomes = $_POST["nomes"] ?? [];
                $array= explode("\n", $nomes);
                $quant = count($array);

                if($quant > 0) {
                    $sorteio = rand(0, $quant - 1);
                    $pessoa = $array[$sorteio];
                    echo "<h3>A pessoa sorteada foi: <br><br><h2>{$pessoa}</h2></h3>";
                } else {
                    echo "<h3>Nenhum nome foi informado!</h3>";
                }
            }
	?>

    </div>
</div>
</body>
</html>
