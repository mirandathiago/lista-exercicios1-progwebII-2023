<?php
	$num1 = $_POST["num1"] ?? 0 ;
	$numfatorial = $num1 * ($num1-1);
	//n! = n x (n – 1) x (n – 2) x (n – 3)!
		if($num1 == 0){
		$numfatorial =1;
		}else{
			for($i=2; $i < $num1; $i++){
			$numfatorial =$numfatorial * ($num1-$i); //o operador *= multiplica o valor da expressão (no lado direito do operador) pelo valor da variável ou da propriedade (no lado esquerdo do operador) 
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Questão 1</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Formulário para descoberta do maior e do menor número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Maior e Menor número</h2>
			<!-- aq eu criei um bloco php dentro do bloco html para imprimir as respostas dos cálculos realizados no bloco php anterior-->
			<?php echo"<p> O número a ser fatoriado foi: {$num1}<br> O resultado foi: {$numfatorial} </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>