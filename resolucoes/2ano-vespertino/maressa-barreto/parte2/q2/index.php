<?php 

$op = $_POST["selecao"] ?? '1' ;

switch ($op) {

case "1":
$resposta = "Com o clima ensolarado, recomendamos ir ao Clube.";
break;

case "2":
$resposta = "Com o clima Ameno, recomendamos ir ao Parque.";;
break;

case "3":
$resposta = " Com o clima Chuvoso, recomendamos ir ao Cinema.";
break;

case "4":
$resposta = " Com o clima Nublado, recomendamos ir ao Museu.";
break ;

case "5":
$resposta = "Ta tempestuoso então fique em casa maluco .";
break;


}


?>
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
		<h1>Trabalho de Web </h1>
	</header>

	<div class="container">

		<div class="box formulario">

				<form action="index.php" method="Post">

				<label>Seleção o clima do momento :
				<select name="selecao">

						<option <?= $op ==" " ? "selected" : ""?>>     </option>

						<option  <?= $op =="1" ? "selected" : ""?> value="1">Ensolarado</option>
						<option  <?= $op =="2" ? "selected" : ""?> value="2" >Ameno</option>
						<option  <?= $op =="3" ? "selected" : ""?>  value="3">Chuvoso</option>
						<option  <?= $op =="4" ? "selected" : ""?> value="4">Nublado</option>
						<option  <?= $op =="5" ? "selected" : ""?> value="5">Tempestuoso</option>			
					</select>
				</label>

				<button name="enviar"> Enviar </button>

			</form>
		</div>

		<div class="box resposta">

			<h2>Resultado</h2>
		
					<h3> <?=$resposta?></h3>
            
		</div>
	</div>
</body>
</html>