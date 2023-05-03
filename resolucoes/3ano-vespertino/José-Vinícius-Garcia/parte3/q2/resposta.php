<?php

$num = $_GET["num"];
$a = 1;
$resposta = 0;

while ($a <= 10) {

$resposta = $a*$num;
    
echo "<h3>{$num} X {$a} = {$resposta}<h3/><br>";
$a++;
}
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