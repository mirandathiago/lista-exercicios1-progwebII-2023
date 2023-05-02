<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <form action="resposta.php" method="post">
        <!--O methodatributo especifica como enviar dados de formulário 
            os dados de formulário são enviados para a página especificada no action atributo-->
        <label>
          Peso:
            <input type="number" name="peso" required>
        </label>
        <br>
        <label>
            Altura:
            <input type="number" name="altura" step="0.01" required>
        </label>
        
        <button>CALCULAR</button>
    </form>


</body>

</html>