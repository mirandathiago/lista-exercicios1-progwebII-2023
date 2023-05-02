<!DOCTYPE html>
<html lang="pt-br">
<!--2- Crie um formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número.
Entrada: 4
Saída: Dobro: 8 e Metade: 2
 --->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <form action="resposta.php" method="post">
        
        <h1>Formulário com um campo numérico e que ao ser enviado irá mostrar o dobro e a metade deste número:</h1>
        <label> <!-- numero que o usuario vai digitar-->
            Número 1:
            <input type="number" name="num1" required>
        </label>
        <br>
        
        <button>CALCULAR</button>
    </form>
</body>
</html>