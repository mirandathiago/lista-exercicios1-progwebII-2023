<!DOCTYPE html>
<html>
<head>
	<title>Triângulo</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="quest6.php" method="post">

            <h1>Número dos lados do triangulo :</h1>

   
            <label >lado  1:
                <input type="number" name="lado1">
            </label>
            <label>lado  2:
                <input type="number" name="lado2">
            </label>
            <label>lado  3:
                <input type="number" name="lado3">
            </label>

           
            <button>Mostrar</button>
		</form>
	</div>
    <?php
    $l1 =  $_POST["lado1"] ?? 1;
    $l2 =  $_POST["lado2"] ?? 1;
    $l3 =  $_POST["lado3"] ?? 1;

    $mens = "";
    $mens2 = " ";
    $tri = false ;



    if($l1 > $l2 && $l1 > $l3){

        if($l1 < ($l2 + $l3)){
                $tri = true;
        }

    }else if($l2 > $l1 && $l2 > $l3){

        if($l2 < ($l1 + $l3)){
            $tri = true;
        }
        
    }else if($l3 > $l1 && $l3 > $l2){

        if($l3 < ($l1 + $l1)){
            $tri = true;
        }
    }


    if($tri == true && $l1 == $l2 && $l2 == $l3){
       $mens = "Triangulo equilatero";
    }else if ($tri == true && ($l1 == $l2 || $l1 == $l3 || $l2 == $l3)){
        $mens = "Trianguo isoceles";
    }else if ($tri == true && ($l1 != $l2 && $l1 != $l3 && $l2 != $l3)){
        $mens = "Triangulo Escaleno";
    }else{
        $mens = "Não é um triangulo";
    }
        
    ?>
    <?="<h3>{$mens}<h3>"?>
</body>
</html>

