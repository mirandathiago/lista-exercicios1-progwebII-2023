<?php
    $energia = $_POST["energia"] ?? 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Idade</title>
	<meta charset="utf-8">
    <link href="estilo.css" rel="stylesheet" >
</head>
<body>
    <h1>CONSUMO DE ENERGIA</h1>
	<?php
        if($energia <= 100){

            $c = ($energia * 0.50) + 20;
            //echo $c;
            echo "<p> O valor da energia será R$ {$c} </p>";

        }
        else if($energia >=101 && $energia <= 200 ){

           $c = ($energia * 0.70) + 20;
          //  echo $c;
         echo "<p class='alerta-verde'> O valor da energia será R$ {$c}</p>";

        }
        else if($energia > 200){

            $c = ($energia * 0.87) + 20;
           // echo $c;
            echo "<p class='alerta-verde'> O valor da energia será R$ s{$c}</p>";

        }
        else
        {
            echo "<p class='alerta-verde'> O valor da energia será R$20,00</P";
        }
    ?>
</body>
</html>