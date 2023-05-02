<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de TMB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo17.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Insira seus dados </h1>
        <form action="receber17.php" method="post">
            <label>Insira sua idade:
              <input type="number" name="idade" required>
            </label>
            <label>Insira seu peso:
              <input type="number" name="peso" required>
            </label>
            <label>Insira sua altura:
              <input type="number" name="altura" required>
            </label>
            <label>Insira seu gênero:
					<input type="radio" name="genero" value="M" required>
					Masculino
				</label>
				<label>
					<input type="radio" name="genero" value="F" required>
					Feminino
          
          <button>Enviar</button>
        </form>
    </div>
</body>
</html>
