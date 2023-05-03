
<!DOCTYPE html>
<html lang="pt=bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Questão 3</title>
</head>
<body>
<?php

$nome = $_GET["ola"];
$hora = date("H");

if ($hora >= 5 && $hora <= 12) {
    echo "<h3 id='mensagem'>Bom dia!!, {$nome}!!</h3>";
}
elseif ($hora >= 13 && $hora <= 18) {
    echo "<h3 id='mensagem'>Boa Tarde!!, {$nome}!!</h3>";
}

elseif ($hora >= 18 && $hora <= 23) {
    echo "<h3 id='mensagem'>Boa Noite, {$nome}!!</h3>";
}

elseif ($hora >= 0 && $hora <= 4) {
    echo "<h3 id='mensagem'>{$nome}, vá Dormir, está de Madrugada!!</h3>";
}

?>
</body>
</html>