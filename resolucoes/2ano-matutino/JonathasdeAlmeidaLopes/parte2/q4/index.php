<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
            
			<h2>Entre em contato</h2>
			<form action="resposta.php" method="post">
                
			<!--Valores calculados na formula de bhaskara
                x= -b +- √Δ /2a 
                sendo que: Δ = b²-4ac-->
                
                <label>Valor de A:
					<input type="number" name="a" required>
				</label>

				<label>Valor de B:
					<input type="number" name="b" required>
				</label>
				
				<label>Valor de C:
					<input type="number" name="c" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>