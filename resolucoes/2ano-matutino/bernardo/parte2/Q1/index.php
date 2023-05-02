<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="resposta.php" method="post">
            <h1>Numero maior e numero menor</h1>
            <label >Numero 1:
                <input type="number" name="num1" required>
            </label>
            
            <label>Numero 2:
                <input type="number" name="num2" required>
            </label>
            <label>Numero 3:
                <input type="number" name="num3" required>
            </label>
           
            <button>Mostrar</button>
		</form>
	</div>
</body>
</html>