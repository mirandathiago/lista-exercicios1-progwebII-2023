<!DOCTYPE html>
<html>
<head>
	<title>Formulário com PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<form action="receber2.php" method="post">
            <h1>Área do terreno</h1>
            <label>
                Comprimento:
                <input type="number" name = "comp">
            </label>
            <br>
            <label>
                Largura:
                <input type="number" name = "larg">
            </label>
            <br>
            <button>Calcular</button>
		</form>
	</div>
</body>
</html>