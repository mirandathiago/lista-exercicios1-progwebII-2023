<!--2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>FORMULÁRIO</title>
</head>

<body>
    
    <!--Linkar o arquivo de resposta no fomulário -->
    <form action="resposta.php" method="post">

        <h2 class="numero">INFORME UM NÚMERO INTEIRO</h2>
        
        <label>
            Número:
            <input type="number" name="num1">
        </label>
        <br>

        
        <button>CALCULAR</button>
    </form>


</body>

</html>