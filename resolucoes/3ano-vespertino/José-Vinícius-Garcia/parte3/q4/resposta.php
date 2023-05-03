<?php

$numero = $_POST["num"];
$bol = $numero;
$resultado = 1;

if ($numero != 0) {
for ($i= 1; $i < $numero; $i++) { 

$resultado+= $bol;
$bol--;

}
}

echo "<h3 id='mensagem'>Soma dos números de {$bol} a {$numero} = {$resultado} </h3>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 1</title>
</head>
<body>
</body>
</html>