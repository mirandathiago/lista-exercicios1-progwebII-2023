<?php

	$preco_original = $_POST["preco_original"] ?? "" ;

	

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
		<h1>Calculando Consumo</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados</h2>
			<form action="index.php" method="post">
				<label>Informe o preço sem desconto do produto:
					<input type="number" id="preco_original" name="preco_original" placeholder="Aguardando" value="<?=$preco_original?>" required>
				</label>

				

				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];	

				if ($metodo == "POST") {
					$desconto = $preco_original * 0.9; 
					echo "<p>O preço com desconto é R$ {$desconto}</p>";
				}else{
                    echo "<p>Aguardando a operação</p>";
                }
				
				?>
			
		</div>
	</div>
</body>
</html>