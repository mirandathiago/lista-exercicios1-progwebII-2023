<?php
	
	$num1 = $_POST["valor1"] ?? 0;


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
		<h1>Estruturas De Repetição</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Insira os valores</h2>
			<form  action="index.php" method="post">
				
				<label>Valor:
					<input type="number" name="valor1" required value= "<?=$num1?>">
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2> Resposta:</h2>
			<?php
             $soma = 0;
             for($i = 1;$i <= $num1 ;$i++){
                $soma += $i;
             }
            echo "Soma dos numeros de 1 a {$num1} é: {$soma} ";


            ?>


            
            
		</div>
	</div>
</body>
</html>