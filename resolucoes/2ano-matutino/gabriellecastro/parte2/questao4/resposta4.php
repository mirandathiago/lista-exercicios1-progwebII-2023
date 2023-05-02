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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">

<?php
		$a = $_POST["valora"] ?? 0;
		$b = $_POST["valorb"] ?? 0;
		$c = $_POST["valorc"] ?? 0;
		$metodo = $_SERVER["REQUEST_METHOD"]; 


			if($metodo != "POST"){
				echo "ERRO";
			}else{
					$d = $b*$b - 4*$a*$c;
					$x1 = ($b*(-1) + sqrt($d)) / (2*$a);
					$x2 = ($b*(-1) - sqrt($d)) / (2*$a);

					if($d < 0){
						echo "A Equação não possui raizes reais.";
					}else if($d == 0){
						echo "A Equação so possui uma raiz: {$x1}.";
					}else{
						echo "Raizes da Equação: {$x1}, {$x2}.";
					}
			}
		
?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>