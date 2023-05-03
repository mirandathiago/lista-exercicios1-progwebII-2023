<?php  
    $a =$_GET["a"];
	$b =$_GET["b"];
	$c =$_GET["c"];

	if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
		
		if ($a == $b && $b == $c) {
			$mensagem = "é possível formar um triangulo equilátero";
		}elseif ($a == $b || $a == $c || $b == $c) {
			$mensagem = "é possível formar um triangulo isóceles";
		}else {
			$mensagem = "é possível formar um triangulo escaleno";
		}
	}else {
		$mensagem = "Não é possível formar um triangulo!";

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
		
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php 
                
                echo "<br>".$mensagem."<br>";
            ?>
			<a href="triangulo.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>