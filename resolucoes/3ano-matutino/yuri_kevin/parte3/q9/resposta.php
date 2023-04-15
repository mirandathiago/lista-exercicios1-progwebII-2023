





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
		<h1>Brigadeiros e Cajuzinhos</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			
			<h2><?php 
					$numero1 = $_GET["numero1"] ?? 10;
					$numero2 = $_GET["numero2"] ?? 20;
					$fator = 2;
					$mdc = 1;
					
					while($numero2 != 1 && $numero1 != 1){
						if($numero2 % $fator == 0 && $numero1 % $fator == 0 ){
							$numero2 = $numero2/$fator;
							$numero1 = $numero1/$fator;
							$mdc*=$fator;
						}
						else if($numero2 % $fator == 0){
							$numero2 = $numero2/$fator;

						}
						else if($numero1 % $fator == 0){
							$numero1 = $numero1/$fator;

						}
						else {
							$fator = $fator+1;
						}
						echo "$mdc<br>";
					}
					echo "total de pratos utilizados: $mdc";
					
					
				?>
			</h2>
			
		</div>
	</div>
</body>
</html>