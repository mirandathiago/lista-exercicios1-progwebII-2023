<!DOCTYPE html>
<html>
<head>
	<title>Questão 8 Parte 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
    <h1>Valor Celular</h1>
		<form action = "r_P1_Q8.php" method = "post">
			<label>Valor Celular:
			  <input type="number" name="valor" min="1" required>
      </label>
	  <label>Parcelas:
			  <input type="number" name="meses" min="0" max="12" required>
      </label>
			<button>Enviar</button>
		</form>
	</div>
</body>
</html>