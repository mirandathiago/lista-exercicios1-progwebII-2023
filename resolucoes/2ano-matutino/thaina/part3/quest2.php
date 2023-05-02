<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IMC</title>
    <link href="estilo.css" rel="stylesheet">
    <head>
        <title>Tabuada</title>
    </head>

    <body>
        <form action="quest2.php" method="post">
            <label>Entre com o número
                <input type="number" name="tab" /> <br/>
            </label>
            <button> Calcular </button>
        </form> 

        <?php 
            $tab = $_POST["tab"] ?? 1;
            $cont = 1;
  
            while($cont<11){
				$resul=$tab*$cont;
				echo "$tab x $cont = $resul<br>";
				$cont++;
			} 
        ?>
 </body>
</html>