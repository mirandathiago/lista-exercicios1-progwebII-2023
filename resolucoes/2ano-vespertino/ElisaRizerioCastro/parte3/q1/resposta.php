<?php
	$n1 = $_POST["n1"];
	$nfatorial = $n1 * ($n1-1);
	//n! = n x (n – 1) x (n – 2) x (n – 3)!
		if($n1 == 0){
		$nfatorial =1;
		}else{
			for($i=2; $i < $n1; $i++){
			$nfatorial =$nfatorial * ($n1-$i); //o operador *= multiplica o valor da expressão (no lado direito do operador) pelo valor da variável ou da propriedade (no lado esquerdo do operador) 
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
			<?php echo"<p> O número a ser fatoriado foi: {$n1}<br> O resultado foi: {$nfatorial} </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>