<?php

	$nome = $_POST["nome"] ?? "" ;
    $date = date('h');
	

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
		<h1>que horas são?</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados</h2>
			<form action="questao3.php" method="post">
				<label>Informe o seu nome:
					<input type="text" id="nome" name="nome" placeholder="Aguardando" value="<?=$nome?>" required>
				</label>
                <button name="enviar"> Enviar </button>
				
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];	

				if (5 >= $date && $date <= 12){ 
					echo "<p>Bom dia, {$nome}</p>";
				}else if(13 >= $date && $date <= 17){
                    echo "<p>Boa tarde, {$nome}</p>";
                }else if(18 >= $date && $date <= 23){
                    echo "<p>Boa noite, {$nome}</p>";
                }else{
                    echo "<p>Vá Dormir, está de Madrugada</p>";
                }
				
				?>
			
		</div>
	</div>
</body>
</html>