<?php

$num = $_POST["num"] ?? 0;



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
		<h1>Formulário de Fatorial</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Fatorial do número</h2>
			<form action ="index.php" method="post">
				<label>Número:
					<input type="number" id="num" name="num" required>
				</label>


				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			
			<?php
			
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($num == 0){
	    echo "Fatorial = 1";
        }else{
			$fat = 1;
        for($i = $num; $i >= 1; $i--){
        $fat *= $i;
		}
          echo "Fatorial: $fat"; 
		}
		
	}
        


?>



		</div>
	</div>
</body>
</html>