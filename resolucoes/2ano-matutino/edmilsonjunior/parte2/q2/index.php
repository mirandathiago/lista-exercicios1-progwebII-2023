<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 2</title>
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body> <div class="container">
		<div class="box formulario">
        <form action="resposta.php" method="GET">
            <label for="cons">Informe o consumo de energia eletrica em Kwh:</label>
            <input type="number" name="consumo" id="cons">
            <button>Enviar</button>
            </form></div>
        </div>
        <?php
            $kwh = $_GET["consumo"] ?? 0;
            $preco = 0;
        if($kwh <= 100){
            $preco = ($kwh*0.50) + 20;
        }else if($kwh > 100 && $kwh < 200){
            $preco = ($kwh*0.70) + 20;
        }elseif($kwh >= 200){
            $preco = ($kwh*0.87) + 20;
        }
        
        if($preco < 20){
            echo "<h3 class='alerta-verde'>Seu João vai pagar 20,00 reais</h3>";
        }else{
            echo "<h3 class='alerta-verde'>Seu joao vai pagar {$preco} reais</h3>";
        }
        
        
        
        ?>
    </body>
</html>