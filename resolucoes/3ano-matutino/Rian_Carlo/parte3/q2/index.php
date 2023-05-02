<?php
    $num = $_POST["numero"] ?? 0;

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
			<h2>Insira um valor</h2> <br>
			<form  action="index.php" method="post">
				
				<label>Informe um numero:
					<input type="number" name="numero" required value= "<?=$num?>">
				</label>
	
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2> Tabuada do numero inserido: </h2>
            <?php 
			if($_SERVER["REQUEST_METHOD"] == "POST"){
               $i = 1;
                while($i <= 10){
                    $soma = $num * $i;
                  
					echo "{$num} x {$i} = {$soma} <br>";
					$i++;
                }
				
			}
           
                
            
            ?>
            

		</div>
	</div>
</body>
</html>