<?php

    $nome = $_POST["nome"] ?? "" ;
	$idade = $_POST["idade"] ?? "" ;
    $peso = $_POST["peso"] ?? "" ;
    $altura = $_POST["altura"] ?? "" ;
    $genero = $_POST["genero"] ?? "masculino ou feminino" ;


	

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
		<h1>Calculando Taxa de Metabolismo Basal - TMB</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados</h2>
			<form action="questao7.php" method="post">

                <label>Informe o seu nome:
					<input type="text" id="nome" name="nome" placeholder="Aguardando" value="<?=$nome?>" required>
				</label>

                <label>Informe a sua idade:
					<input type="number" id="idade" name="idade" placeholder="Aguardando" value="<?=$idade?>" required>
				</label>

				<label>Informe o seu peso em quilos:
					<input type="number" id="peso" name="peso" placeholder="Aguardando" value="<?=$peso?>" required>
				</label>

                <label>Informe a sua altura em centímetros:
					<input type="number" id="altura" name="altura" placeholder="Aguardando" value="<?=$altura?>" required>
				</label>
                        
                <label>Informe o seu gênero:
					<input type="text" id="genero" name="genero" placeholder="Aguardando" value="<?=$genero?>" required>
				</label>

                <button name="enviar"> Enviar </button>
				
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];	

				switch ($metodo == "POST") {
                    case $genero = "masculino":
					$TMB = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $idade); 
					echo "<p>{$nome}, sua taxa de metabolismo basal (TMB) é de aproximadamente {$TMB} calorias por dia.</p>";
                    break;
				
                    case $genero = "feminino":
					$TMB = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $idade); 
					echo "<p>{$nome}, sua taxa de metabolismo basal (TMB) é de aproximadamente {$TMB} calorias por dia.</p>";
                    break;

                    default:
                    echo "<p>Aguardando a operação</p>";
                    }
				
				?>
			
		</div>
	</div>
</body>
</html>