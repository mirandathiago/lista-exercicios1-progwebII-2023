<?php

    $num = $_POST["num"] ?? 0; // recebe formulario
    $soma = 0; 

		for($i = 1; $i <= $num; $i++) { // quantidade de vezes que ira compilar
			$soma += $i;  
		}
		

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
		<h1>Soma de 1 a N</h1>
	</header>

	<div class="container">
		<div class="box formulario">

			<form action="index.php" method="post">

				<label>Digite o valor de N:
                <input type="number" name="num" min=1 step="1" required value="<?=$n?>"> 
				</label>
                
				<button name="enviar"> Calcular </button>
			</form>
		</div>

        <div class="box resposta">
			<h2>Resultado</h2>
			<?php

                $metodo = $_SERVER["REQUEST_METHOD"];// para garante que o furmulario foi enviado e esta seguro
                
                echo "<p class='alerta-verde'>Soma dos números de 1 a {$num}: {$soma}</p>"; 
               

            ?>
		</div>		
	</div>
</body>
</html>
