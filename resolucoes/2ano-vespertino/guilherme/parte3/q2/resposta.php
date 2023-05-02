<?php

$n=$_POST["n"];
$i=0;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 2</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1>TABUADA</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Tabuada do <?=$n?></h2>
			<?php
			while($i<11){
				$resultado=$n*$i;
				echo "$n x $i = $resultado<br>";
				$i++;
			}
			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>