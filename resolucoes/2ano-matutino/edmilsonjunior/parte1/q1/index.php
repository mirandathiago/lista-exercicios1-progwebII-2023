
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 1</title>
         <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div class="container">
		<div class="box formulario">
        <form action="q1.php" method="POST">
       Preço:<input type="text" name="preco"><br>
        <button>Enviar</button>
        </form>
            </div>
        </div>
        <?php
            $preco = $_POST["preco"] ?? 0;
            $desconto = 0;
            $precofinal = 0;
            $desconto = $preco*(10/100);
            $precofinal = $preco - $desconto;
            echo "<p class='alerta-verde'>{$preco} reais, com desconto de 10% é {$precofinal} reais</p>";
           
        ?>
    </body>
</html>