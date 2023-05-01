<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <form action="resposta.php" method="post">

        <h1>CALCULE SEU IMC</h1>
        <label>
          Peso (Kg):
            <input type="number" name="peso">
        </label>
        <br>
        <label>
            Altura (M):
            <input type="number" name="altura" step="0.01">
        </label>
        
        <button>CALCULAR</button>
    </form>


</body>

</html>