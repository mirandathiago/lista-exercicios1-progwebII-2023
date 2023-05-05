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
		<h1>Questão 10 - Parte 3</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>10- Crie um formulário em HTML que solicita ao usuário o número de linhas que deseja exibir no padrão de asteriscos. Em seguida, crie um script PHP que use a técnica de loop aninhado para construir o padrão de asteriscos, com base no número de linhas fornecido pelo usuário.</h2>

			<form action="index.php" method="post">
				
				<label>Quantidade de Linhas:
					<input type="number" id="linhas" name="linhas" required value="<?=$_POST["linhas"] ?? "" ?>">
				</label>
				

				
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$linhas = $_POST["linhas"];

					for($i=1;$i<=$linhas;$i++){
						for($j=1;$j<=$i;$j++){
							echo " {$i}.{$j} ";
						}
						echo "<br>";
					}

				}



			
			?>

		</div>
	</div>
</body>
</html>
