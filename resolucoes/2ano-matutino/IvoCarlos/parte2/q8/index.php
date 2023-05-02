<?php
        $metodo = ($_SERVER["REQUEST_METHOD"]);
        $peso = $_POST['peso'] ?? " ";
        $altura = $_POST['altura'] ?? " ";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../estilo.css">
</head>
<body>
	<header>
		<h1> Questão 18 - Calculadora IMC  </h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Descubra o seu Índice de Massa Corporal:</h2>
			<form action="index.php" method="post">
				<label>Peso(em kg):
					<input type="number" name="peso"  min ="3" step="0.01" required value="<?=$peso?>">
				</label>
                <label>Altura(em m):
					<input type="number" name="altura" min ="0.30" max="2.5"step="0.01" required value="<?=$altura?>">
				</label>
				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	
		<div class="box resposta">
			<h2> Resultado:</h2>
			<?php 
            /*O  cálculo do IMC é realizado pela fórmula: IMC = peso / (altura^2), onde peso é a massa corporal em quilogramas 
            e altura é a altura em metros elevada ao quadrado.*/ 
                if($metodo == "POST"){
                    $imc = $peso / ($altura * $altura);
                    $imc = number_format($imc,2);
                    if($imc < 18.5){
                        echo "Seu IMC é {$imc} , você está abaixo do peso.";
                    }else if($imc >= 18.5 && $imc <= 24.9){
                        echo" Seu IMC é {$imc}, você está na faixa de peso normal.";
                    }else if($imc >= 25 && $imc <= 29.9){
                        echo "Seu IMC é {$imc}, você está na faixa de sobrepeso.";
                    }else if($imc >= 30 && $imc <= 34.9){
                        echo "Seu IMC é {$imc}, você está na faixa de Obesidade grau 1.";
                    }else if($imc >= 35 && $imc <= 39.9){
                        echo "Seu IMC é {$imc}, você está na faixa de Obesidade grau 2.";
                    }else{
                        echo "Seu IMC é {$imc}, você está na faixa de Obesidade grau 3.";
                    }
                    
                }
            ?>

		</div>
	</div>
</body>
</html>
