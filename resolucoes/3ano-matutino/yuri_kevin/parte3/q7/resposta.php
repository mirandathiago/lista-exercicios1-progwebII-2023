





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
		<h1>Saque</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			
			<h2><?php 
					$numero = $_GET["numero"] ?? 10;
					
					switch($numero){
						case $numero>=100;
						$cem = intdiv($numero, 100);
						$numero = $numero - ($cem * 100);
						if($cem>=1){
						echo "$cem nota(s) de R$100<br>";
						}
						
						
						

						case $numero>=50;
						$cinquenta = intdiv($numero, 50);
						$numero = $numero - ($cinquenta * 50);
						if($cinquenta>=1){
						echo "$cinquenta nota(s) de R$50<br>";
						}
						

						case $numero>=20;
						$vinte = intdiv($numero, 20);
						$numero = $numero - ($vinte * 20);
						if($vinte>=1){
						echo "$vinte nota(s) de R$20<br>";
						}
						

						case $numero>=10;
						$dez = intdiv($numero, 10);
						$numero = $numero - ($dez * 10);
						if($dez>=1){
						echo "$dez nota(s) de R$10<br>";
						}
						
						case $numero>=5;
						$cinco = intdiv($numero, 5);
						$numero = $numero - ($cinco * 5);
						if($cinco>=1){
						echo "$cinco nota(s) de R$5<br>";
						}
					
						
						case $numero>=2;
						$dois = intdiv($numero, 2);
						$numero = $numero - ($dois * 2);
						if($dois>=1){
						echo "$dois nota(s) de R$2<br>";
						}
						
						case $numero>=1;
						$um = intdiv($numero, 1);
						$numero = $numero - ($um * 1);
						if($um>=1){
						echo "$um nota(s) de R$1<br>";
						}

						break;

						
					}
					
				?>
			</h2>
			
		</div>
	</div>
</body>
</html>