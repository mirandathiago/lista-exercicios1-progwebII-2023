<?php  
    $a =$_GET["a"];
	$b =$_GET["b"];
	$c =$_GET["c"];

	$delta = $b**2 - ((4*$a) * $c);
	//delta = b^2 - 4.a.c
	
	$x1 = -$b + sqrt($delta)/2*$a;
	$x2 = -$b - sqrt($delta)/2*$a;
    //x = -b +- raiz de delta/2a

	if (sqrt($delta)<0) {
		$mensagem = "A equação não possui raizes reais!";
	}elseif (sqrt($delta)) {
		$mensagem = "A equação possui uma única raiz real";
	}else {
		$mensagem = "A equação possui duas raizes reais";
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
                
                echo "<br>". $mensagem. "<br>";
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>