<!DOCTYPE>
<html>
<head>
<title>
Soma
</title>


</head>

<body>
<form action="soma.php" method="get" >

<input type="number" name="soma">
     <input type="submit" Value:" Enviar">

</form>

<?php

$c = $_GET['soma'];

$N= [1 , 2 ,3 ,4, 5];

$soma= 0;

for($i = 0, $soma = count($N); $i < $N; $i++);

echo " Resultado: $soma";
?>

</body>
</html>
