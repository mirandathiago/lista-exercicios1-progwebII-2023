// questao seis parte dois



<!DOCTYPE>

<html>
<head>
<title> Questão 6</title>
</head>
<body>

<form action= "Exemplo1.php" method="Get">
  Lado 1  <input type="number" name="num1">
  Lado 2  <input type="number" name="num2">
  Lado 3  <input type="number" name="num3">
    <input type="submit" Value:" Enviar">



    </form>
        
        
        <?php 
        
    $a= $_GET["num1"];
    $b= $_GET["num2"];
    $c= $_GET["num3"];
    
    if( ($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a) ){ 
     if($a==$b && $b==$c){
     echo "Equilátero, tudo igual poxa";
     }
    
    if($a==$b || $a==$c || $b==$c){
     echo "Isósceles, um dos irmos nao é gemeo";
     }
    
    else{
    
    echo "Ecaleno, ou Scarlet e Lennon kkkk";
    else{
        echo "NEM TRIANGULO É KKKKL";
    }
    }
 } ?>


</body>


</html>
