
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
		<h1>Maior e Menor numero</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2></h2>
			<form action="index.php" method="post">
				
				<label>1° numero:
					<input type="number" name="numero1" required value="">
				</label>
				<label>2° numero:
					<input type="number" name="numero2" required value="">
				</label>
                <label>3° numero:
					<input type="number" name="numero3" required value="">
				</label>
								
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
            
			<?php
            
        $num1 = $_POST["numero1"] ?? "";//é para resgatar o valor do campo
        $num2 = $_POST["numero2"] ?? "";
        $num3 = $_POST["numero3"] ?? "";
          
        $menor = $num1;
        $maior = $num1;
        
           if($num2 < $menor){
                $menor=$num3;
            }
            else if($num3 > $menor){
                $menor=$num3;
            }
            if($num2 > $maior){
                $maior=$num2;
            }
            else if($num3 > $maior){
                $maior=$num3;
            }
            echo "<h2>o maior numero é {$maior} e o menor numero é {$menor}</h2>";
            ?>
		</div>
	</div>
</body>
</html>