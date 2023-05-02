<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo18.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Insira seus dados </h1>
        <form action="receber18.php" method="post">
            <label>Insira seu nome:
              <input type="text" name="nome" required>
            <label>Insira seu peso:
              <input type="number" name="peso" required>
            </label>
            <label>Insira sua altura em metros:
              <input type="number" name="altura" step="0.01" required>
            </label>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>