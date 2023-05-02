
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Questão 1</title>
        <link rel="stylesheet" type="text/css" href="q1.css">
    </head>
    <body>
        <h1>Desconto de 10%</h1>
        <form action="index.php" method="POST">
       Preço:<input type="text" name="preco"><br>
        <button>Enviar</button>
        </form>
        <?php
            $preco = $_POST["preco"] ?? 0;
            $desconto = 0;
            $precofinal = 0;
            $desconto = $preco*(10/100);
            $precofinal = $preco - $desconto;
            echo "<h3>{$preco} reais, com desconto de 10% é {$precofinal} reais</h3>";
           
        ?>
    </body>
</html>