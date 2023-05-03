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
			<h2>Os pares entre o intervalo inicial e final são:</h2>
			<br>
			<p class="alerta-verde">
			<?=$numInicial ?> e <?=$numFinal ?>
			<?php
             $numInicial = $_POST["numInicial"] ?? 0;
             $numFinal = $_POST["numFinal"] ?? 0;
             $contar = 0; //enquanto o for tiver rodando o contar vai aumentando para exibir o valor de pares
			 // que tem no intervalo

             for($y = $numInicial; $y <= $numFinal; $y++){
	         if($y % 2 == 0){ //verificar se o numero vai ser par ou impar
		       
	    	   $contar++;
	          }
            }

            ?>

			</p>

			<br>
			<br>

			<p class="alerta-vermelho">
				<?php 
				if($contar == 1){
					echo "Tem {$contar} par.";
				}else{
					echo "Tem {$contar} pares.";
				}
				
				?>
		    </p>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>