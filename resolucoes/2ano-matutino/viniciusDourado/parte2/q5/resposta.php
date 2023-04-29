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
		<h1>Ímpar ou Par</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			$num = $_POST["numero"] ?? 0; 
			$escolha = $_POST["escolha"] ?? 0; 
			$pc = rand(0,10);
			$soma = $num + $pc;
			if( $soma % 2 == 0 ){
				$result = "par";
			}else{
				$result = "impar";
			}

			if($escolha == $result){
				echo"<p class='alerta-amarelo'>O usuário escolheu {$escolha} e o número {$num}. O computador sorteou o número {$pc}, e a soma deles é {$soma}. {$soma} é {$result} e o usuário venceu.</p>";
			} else{
				echo"<p class='alerta-amarelo'>O usuário escolheu {$escolha} e o número {$num}. O computador sorteou o número {$pc}, e a soma deles é {$soma}. {$soma} é {$result} e o Computador venceu.</p>";
			}
?>
		</div>
	</div>
</body>
</html>