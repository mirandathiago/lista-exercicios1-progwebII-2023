<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <header>
        <h1>Formulário de Contato</h1>
    </header>
    <div class="container">
        <div class="box formulario">
            <h2>Calculadora de Preço</h2>
            <form action="receber.php" method="post">
                <label>Preço Original do Produto:
                    <input type="number" id="preco" name="preco" required>
                </label>
                <label>Valor do Desconto do Produto:
                    <input type="number" id="desconto" name="desconto" required>
                </label>
                </div>
              </fieldset>

                <button name="calcular"> Enviar </button>
            </form>
        </div>
        
    </div>
</body>
</html>
<?php
    $preco = $_POST["preco"];
    $desconto = $_POST["desconto"];

    $descontofinal = ($desconto / 100) * $preco;
    $precofinal = $preco - $descontofinal;

?>
