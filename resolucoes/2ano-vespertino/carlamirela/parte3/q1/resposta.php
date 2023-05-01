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
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
		  $n=$_GET['number'];
		  $fatorial = 1;
		  
		  for($count=1; $count<=$n ; $count++)
		   $fatorial *= $count;
		   
		  echo $fatorial;
		
             ?>
	</div>
	</div>
</body>
</html>