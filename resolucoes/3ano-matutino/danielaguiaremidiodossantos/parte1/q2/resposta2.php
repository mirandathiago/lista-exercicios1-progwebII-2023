<?php

function calcular_dobro($numero){
    
    $resultado = $numero * 2;
    return $resultado;

echo $resultado;

}

echo "O dobro de 8 é:" . calcular_dobro(8);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>formulario</title>
</head>
<body>

    <div class="container">
        <h1>campo numerico</h1> 
        
        <form action="receber2.php" method="get ">
        
        <label>
            entrada 4:
            <br> <input type="number" name="entrada" value="4" > </br>

        </label>
         <label>
            
             dobro 8:
             <br> <input type="number" name="dobro" value="8" > </br>

    </label>
    <button>Calcular</button>
		</form>
    
</body>
</html>