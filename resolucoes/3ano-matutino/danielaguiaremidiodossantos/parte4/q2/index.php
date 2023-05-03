<?php

if(isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    
    if(empty($nome)) {
        echo "Por favor,pelo menos um nome.";
    } else {
        $nome_array = explode("\n", $nome); 
        $num_nome = count($nome_array);
        $indice_sorteado = rand(0, $num_nome - 1);
        $nomes_sorteado = $nome_array[$indice_sorteado];
        echo "A pessoa sortuda foi: " . $nome_sorteado;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="index2.css">
    <title>sorteio</title>
</head>
<body>

<header>
		<h1>Sorteio</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<p class="alerta-amarelo">
            </p>
            <a href="index2.php" class="link">retornar</a>
		</div>
	</div>


    
</body>
</html>