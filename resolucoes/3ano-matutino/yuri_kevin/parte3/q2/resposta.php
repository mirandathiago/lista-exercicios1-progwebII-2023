





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
		<h1>Tabuada</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			
			<h2><?php 
					$numero = $_GET["numero"] ?? 10;
					$i = 1;
					
					while($i <= $numero){
						$result = $numero * $i;
						echo "$numero x  $i  = $result <br>";
						$i++;
					}
				?>
			</h2>
			
		</div>
	</div>
</body>
</html>