<?php
    $value1 = $_POST["value1"] ?? 0;
    $value2 = $_POST["value2"] ?? 0;
    $acumulador = 0;
 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Formulário de Idade</title>
	<meta charset="utf-8">
    <link href="estilo1.css" rel="stylesheet" >
</head>
<body>
    <div class = "box">
    <?php
       for($i = $value1; $i < $value2; $i++){
    
        if($i % 2 == 0){
            $acumulador++;
        }  
    }
        echo "O intervalo de {$value1} á {$value2} é $acumulador";
    ?>
	</div>
</body>
</html>
