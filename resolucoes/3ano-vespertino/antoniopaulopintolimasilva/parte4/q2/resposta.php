<?php
	$nomes = $_POST["nomes"] ?? "";
	$quebra = explode("\n",$nomes);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sorteador</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Sorteador de Nomes</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$sorteio = rand(0,count($quebra));
				echo "Os nomes armazenados são: <br>";
				foreach($quebra as $quebras){
					echo $quebras."<br>";
				}
				echo "<br>O nome sortiado foi: ".$quebra[$sorteio];
			?>
			<br>
            <a href="formulario.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>