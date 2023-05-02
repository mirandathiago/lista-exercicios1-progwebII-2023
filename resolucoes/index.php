<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sorteio de Resolução de Questões</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sorteio de Resolução de Questões</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			
            <form action="gerar_turma.php" method="get">
				<label>Turma:
					<select name="turma">
						<option></option>
						<option value="0">2º ano Matutino</option>
						<option value="1">2º ano Vespertino</option>
						<option value="2">3º ano Matutino</option>
                        <option value="3">3º ano Vespertino</option>
					</select>
			   </label>

			  <button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>