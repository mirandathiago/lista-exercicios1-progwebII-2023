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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Entre em contato</h2>
			<form action="index.php" method="post">
				<label>Nome:
					<input type="text" id="idnome" name="nome" required>
				</label>

				<label>Idade
					<input type="number" id="ididade" name="idade" required>
				</label>

				<label>Peso
					<input type="number" id="idpeso" name="peso" step="0.1" required>
				</label>

				<label>Altura(cm):
					<input type="number" id="idaltura" name="altura" required>
				</label>
				<label>Sexo:
					<select name="sexo">
						<option></option>
						<option value="1">Masculino</option>
						<option value="2">Feminino</option>
					</select>
			   </label>
			   <button name="enviar"> Enviar </button>
			</form>
		</div>
		
		<div class="box resposta">
			<h2>Resposta</h2>
<?php

$metodo= $_SERVER["REQUEST_METHOD"];
if($metodo=="POST"){

$nome=$_POST["nome"];
$idade=$_POST["idade"];
$peso=$_POST["peso"];
$altura=$_POST["altura"];
$sexo=$_POST["sexo"];
$tmb;



		switch($sexo){

			case 1 :			
				$tmb = 88.36 + (13.4*$peso) + (4.8*$altura) - (5.7*$idade);
				print("<p class='alerta-verde'>{$nome}, a sua taxa de metabolismo basal (TMB) é de aproximadamente {$tmb} calorias por dia.</p>");
				
				break;

			case 2:
				$tmb = 447.6 + (9.2*$peso) + (3.1*$altura) - (4.3*$idade); 
				
				print("<p class='alerta-verde'>{$nome}, a sua taxa de metabolismo basal (TMB) é de aproximadamente {$tmb} calorias por dia.</p>");
				break;


		}


}else{}		
?>
		</div>
	</div>
</body>
</html>