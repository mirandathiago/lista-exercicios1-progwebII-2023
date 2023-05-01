
// questão 1 segunda parte da lista

!DOCTYPE>

<html>
<head>
<title> Questão 3</title>
</head>
<body>

<form action= "exemplo3.php" method="Get">
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="number" name="num3">
    <input type="submit" Value:" Enviar">



    </form>
        
        
        <?php 
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];

if($num2 < $num3){

$valor= $num2;
 $num2=$num3;
    $valor=$num3;
    
    
} if($num1 < $num3){
    $valor=$num3;
    $num2=$num1;
    $num1=$valor;
    
    
}if($num1 < $num3){
    $valor=$num3;
    $num1=$num3;
    $num1=$valor;
    
}
    echo "Menor numero: {$num3}.
          Maior numero: {$num1}";


        ?>


</body>


</html>


