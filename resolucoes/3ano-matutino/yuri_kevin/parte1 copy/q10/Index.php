<!DOCTYPE html>
<html>
<head>
	<title>Questão 10 Parte 1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="box formulario">
    	<h1>Calcular Juros Compsotos</h1>
		<form action = "r_p1_q10.php" method = "post">
			<label>Valor Empréstimo:
			  <input type="number" name="valor" min="100" required>
      		</label>
	  		<label>Quantidade de Meses:
			  <input type="number" name="meses" min="1" required>
      		</label>
			<button>Enviar</button>
		</form>
		</div>
	</div>
</body>
</html>