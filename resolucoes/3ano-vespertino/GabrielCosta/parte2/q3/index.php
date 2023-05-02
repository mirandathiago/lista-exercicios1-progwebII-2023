<?php 
$nem = $_POST["nome"] ?? ""; 




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
		<h1>OI</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<form action="q_stao3.php" method="post">
				
				<label>Nome:
					<input type="text" name="nome" value="<?=$nem?>" required>
				</label>
                
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
           
		   <?php
		  
		   
		   //$agora = new dateTime(); 
		    date("H");
		   

		   if(05 <=  date("H") &&  date("H") <= 12){
			echo date("H");
			"<br>";
			echo " Horas. Bom dia, {$nem}!";

		   } else if(13 <= date("H") && date("H") < 18){
			echo date("H");
			"<br>";
			echo " Horas. Boa tarde, {$nem}";

		   } else if(18 <= date("H") && date("H") <= 23){
			echo date("H");
			"<br>";
			echo " Horas. Boa noite, {$nem}";

		   } else if(00 <= date("H") && date("H") <= 04){
			echo date("H");
			"<br>";
			echo " Horas. Vá Dormir {$nem}, está de Madrugada.";
		   }
			
			
			?>
		</div>
	</div>
</body>
</html>