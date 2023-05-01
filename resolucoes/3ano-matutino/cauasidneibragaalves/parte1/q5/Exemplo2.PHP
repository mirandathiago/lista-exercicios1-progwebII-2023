// Questão 5

<!DOCTYPE>

<html>
<head>
<title> Questão 5</title>
</head>
<body>

<form action= "Exemplo2.php" method="Post">
    
Distancia: <input type="text" name= "x">
    Tempo: <input type= "text" name= "y">

<input type="submit">
    </form>
        
        
        <?php
        
       $x= $_POST['x'];
    $y = $_POST['y'];
$vm= $x/$y;

echo "Velocidade media: $vm";
        
       ?>


</body>


</html>
