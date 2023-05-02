<?php

    $peso = $_GET["peso"] ?? 60 ;
    $altura = $_GET["altura"] ?? 160 ;

	$imc = $peso / ($altura ** 2);


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
		<h1>Calculando Índice de Massa Corporal - IMC</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Informe os Dados</h2>
			<form action="questao8.php" method="get">

                

				<label>Informe o seu peso em quilos:
					<input type="number" id="peso" name="peso" placeholder="Aguardando" value="<?=$peso?>" required>
				</label>

                <label>Informe a sua altura em metros:
					<input type="number" name="altura" step="0.01" value="1.60">
				</label>

                <button name="enviar"> Enviar </button>
				
			</form>
		</div>
		<div class="box resposta">
			<h2>Resposta</h2>
			<?php
                    
				    if ($imc < 18.5) {
                        echo "<p>Seu imc é {$imc}, você está abaixo do peso</p>";

					}else if(18.5 <= $imc && $imc <= 24.9){
						echo "<p>Seu imc é {$imc}, você na faixa de peso normal</p>";

					}else if(25 <= $imc && $imc <= 29.9){
                        echo "<p>Seu imc é {$imc}, você na faixa de sobrepeso</p>";

                    }else if(30 <= $imc && $imc <= 34.9){
						echo "<p>Seu imc é {$imc}, você na faixa de obesidade grau 1</p>";

                    }else if(35 <= $imc && $imc <= 39.9){
                        echo "<p>Seu imc é {$imc}, você na faixa de obesidade grau 2</p>";

                    }else if(40 <= $imc){
                        echo "<p>Seu imc é {$imc}, você na faixa de obesidade grau 3</p>";

                    }else{
                        echo "<p>Aguardando a operação</p>";
                    }
                
                    ?>
			
		</div>
	</div>
</body>
</html>