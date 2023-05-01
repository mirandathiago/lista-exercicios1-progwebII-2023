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
		<h1>Verificar maior e menor número</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resultado</h2>
            <?php
             $numero1=$_POST['numero1'] ?? 0 ;
             $numero2=$_POST['numero2'] ?? 0 ;
             $numero3=$_POST['numero3'] ?? 0 ;

			 $maior=$numero1;
			 $menor=$numero1;

			if($numero2 > $maior){
				$maior = $numero2;
			}
			if($numero3 > $maior){
				$maior = $numero3;
			}
	
			if($numero2 < $menor){
				$menor = $numero2;
			}
			if($numero3 < $menor){
				$menor = $numero3;
			}
            
			echo "Maior número é $maior<br>Menor é $menor<br>";
			?>
			
			<a href="maiormenor.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>