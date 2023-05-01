<!DOCTYPE>

//Questão 3

<html>
<head>
<title> Questão 3</title>
</head>
<body>

<form action= "Exemplo.php" method="Get">
    
Nota 1: <input type="number" name="num1">
Nota 2: <input type="number" name="num2">
Nota 3: <input type="number" name="num3">

<input type="submit">
    </form>
        
        
        <?php
        
  $num1= $_GET['num1'];
    $num2= $_GET['num2']; 
$num3= $_GET['num3'];  

$peso1= $_GET['peso1'] ?? 2;
$peso2= $_GET['peso2'] ?? 3;
$peso3= $_GET['peso3'] ?? 5;

$media= ($num1*$peso1)+ ($num1*$peso2)+ ($num3*$peso3) / 3;

echo "Media: $media";
        ?>


</body>


</html>
