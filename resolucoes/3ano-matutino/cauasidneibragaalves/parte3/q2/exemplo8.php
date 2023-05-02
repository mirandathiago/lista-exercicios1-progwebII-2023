>/* questao 2 da parte 3 da lista


*/

<!doctype>
<html>

<head>

<title> Tabuada</title>


</head>

<body>

<form action="Tabuada.php" Method="get">
<inpu type= "number" name= "tabuadinha" />
<input type="submit" Value:" Enviar">

</form>

<?php

$tabuada= $_GET['tabuadinha'];
$contador = 1;


while($contador <=10){
    echo " <p>{$tabuada} x {$contador} = </p>";
}


?>
</body>


</html>
