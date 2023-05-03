<?php
    $inicial = $_POST["inicial"] ?? 0;
    $final = $_POST["final"] ?? 0;

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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
			
                $metodo = $_SERVER["REQUEST_METHOD"];
				$num=0;
				echo "Início do intervalo: {$inicial}<br>";
				echo "Fim do intervalo: {$final}<br>";
				if($metodo == "POST"){

                    for($i = $inicial; $i <= $final; $i++){
                        
						if($i % 2 == 0){
                            
							echo "<li>$i</li>";
							$num ++;
                        }

						
                    }
					
					echo "Quantidade de números pares: {$num}";

				}
            
            ?>
			<a href="formulario.php">
				<button class="button">Voltar</button>
			</a>
			
		</div>
	</div>
</body>
</html>