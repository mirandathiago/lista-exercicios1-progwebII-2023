<?php
	
   
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
		<h1>Listagem de numeros pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Escolha o número inicial e o número final</h2>
			<form action="index.php" method="post">
				
				<label>Inicial:
					<input type="number" name="inicial" required value="">
				</label>
				<label>Final:
					<input type="number" name="final" required value="">
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            
			<?php
            
            /*
		Quantidade de números Pares entre dois números.
	   */
        $inicial = $_POST["inicial"] ?? 0;//é para resgatar o valor do campo
        $final = $_POST["final"] ?? 0;
        $pares=0;


        for($n=$inicial; $n<=$final; $n++){
            if($n % 2==0){
                $pares++;
            }
       
        }
           echo " a quantidade de numeros pares entre os numeros {$inicial} e {$final} é {$pares}";
            ?>
		</div>
	</div>
</body>
</html>