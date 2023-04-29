<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Verificação dos dias da semana</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<form action="index.php" method="post">
                <label>
                   Selecione um número:
				   <select name="semana">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value=" "> </option>
				   </select>
                </label> 
                <button class="enviar">Enviar</button>   
            </form>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"]; 
					if($metodo == "POST"){

						$semana = $_POST["semana"]; // recupera o valor do campo select
					

						switch($semana){ // testa essa variável
							case 1: // coloca o valor da tag option
								echo "<p class='alerta-vermelho'>Final de samana!</p>";
							break;	

							case 2:
								echo "<p class='alerta-vermelho'>Dia útil</p>";
							break;
							
							case 3:
								echo "<p class='alerta-vermelho'>Dia útil</p>";
							break;
							
							case 4:
								echo "<p class='alerta-vermelho'>Dia útil</p>";
							break;

							case 5:
								echo "<p class='alerta-vermelho'>Dia útil</p>";
							break;

							case 6:
								echo "<p class='alerta-vermelho'>Dia útil</p>";
							break;

							case 7:
								echo "<p class='alerta-vermelho'>Final de semana!</p>";
							break;

							default:
								echo "<p class='alerta-vermelho'>Inválido</p>";
						}
                	}  
			?>		  
		</div>
	</div>
</body>
</html>