<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Tipos de Triângulos</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="receber.php" method="post">
			    <p>Digite o tamanho do primeiro lado:</p>
                    <input type="number" name="lado1"><br></br>
                <p>Digite o tamanho do segundo lado:</p>
                    <input type="number" name="lado2"><br></br>
                <p>Digite o tamanho do terceiro lado:</p>
                    <input type="number" name="lado3"><br></br>
			        <button name="enviar"> Enviar </button>
			    </form>
		</div>
	</div>
</body>
</html>
