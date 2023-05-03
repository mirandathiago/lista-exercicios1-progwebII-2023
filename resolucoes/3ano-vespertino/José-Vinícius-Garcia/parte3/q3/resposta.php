<?php

$numero1 = $_GET["num1"];
$numero2 = $_GET["num2"];
$resultado = 0;

for ($numero1; $numero1 <= $numero2 ; $numero1++) { 
    
    if ( $numero1 % 2 == 0) {
        $resultado++;
    }

}

echo "<h3>Quantidade de números pares: {$resultado}</h3>"

?>

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Resposta</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
</body>
</html>