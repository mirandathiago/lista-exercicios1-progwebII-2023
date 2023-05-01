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
		<h1>Estruturas Condicionais</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Medidor De  Massa Corporal:</h2> <br>
			<form  action="index.php" method="post">
				
				<label>Peso:
					<input type="number" name="peso" required >
				</label>
                
                <label>Altura:
					<input type="float" name="altura" required  >
                    <br>
				</label>
	
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2> Resposta: </h2>
            <?php 
				
				if(isset($_POST['peso']) && isset($_POST['altura'])) {
					$peso = $_POST['peso'];
					$altura = $_POST['altura'];
					$imc = $peso / ($altura * $altura);
					
				
			
                if($imc < 18.5){
                    echo "<p> Seu IMC é: ".number_format( $imc,2,",")." Você está abaixo do peso!</p>";
                }elseif($imc >= 10.5 && $imc <= 24.9){
                    
                    echo "<p> Seu IMC é: ".number_format( $imc,2,",")." Você está com o peso normal!</p>";
                }elseif($imc >= 25 && $imc <= 29.9){
                   ;
                    echo "<p> Seu IMC é: ".number_format( $imc,2,",")." Você está com faixa de sobrepeso!</p>";
                }elseif($imc >= 30 && $imc <= 34.9){
                    
                    echo "<p> Seu IMC é: ".number_format( $imc,2,",")." Você está com obesidade grau 1!</p>";
                }elseif($imc >= 35 && $imc <= 39.9){
                
                    echo "<p> Seu IMC é: ".number_format( $imc,2,",")." Você está com obesidade grau 2!</p>";
                }else{
                    
                    echo "<p> Seu IMC é: ".number_format( $imc,2,",")." Você está com obesidade grau 3!</p>";
                }
			
            }
            ?>
            

		</div>
	</div>
</body>
</html>