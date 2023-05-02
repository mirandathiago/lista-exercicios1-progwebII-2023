<?php
	$num1 = $_POST["num1"] ?? 0 ;
	$numfat = $num1 * ($num1-1);
	
		if($num1 == 0){
		$numfat =1;
		}else{
			for($i=2; $i < $num1; $i++){
			$numfat =$numfat * ($num1-$i); //o operador *= multiplica o valor da expressão (no lado direito do operador) pelo valor da variável ou da propriedade (no lado esquerdo do operador) 
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
		<h1>Formulário para gerar o fatorial</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Fatorial</h2>
			<?php echo"<p> O número digitado foi: {$num1} <br> O seu fatorial é: {$numfat} </p>"?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>