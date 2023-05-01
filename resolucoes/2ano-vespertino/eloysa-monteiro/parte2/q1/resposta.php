<?php
        $camp0 = $_POST["camp0"] ?? 0; // 2 , 4 
        $camp1 = $_POST["camp1"] ?? 0; // 5 , 6
        $camp2 = $_POST["camp2"] ?? 0; // 1 , 3
       
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
        <div class="box">
            <h2> RESPOSTA </h2>

            <?php
                if($camp0 > $camp1){
                        echo "<p class='alerta-verde'> O maior é {$camp0} e o menor é {$camp1}";
                }
                else if($camp1 > $camp2){
                    echo "<p class='alerta-verde'> O maior é {$camp1} e o menor é {$camp2}";
                }
                else if($camp2 > $camp0){
                    echo "<p class='alerta-verde'> O mmaior é {$camp2} e o menor é {$camp0}";
                }
                ?>
         </div>
</body>
</html>