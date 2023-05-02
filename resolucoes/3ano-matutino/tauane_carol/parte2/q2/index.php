<?php
    $energia = $_POST["energia"] ?? 0;

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
			<h2>Insira um valor</h2> <br>
			<form  action="index.php" method="post">
				
				<label>Medidor De Energia, Quilowatts-Hora:
					<input type="number" name="energia" required value= "<?=$energia?>">
				</label>
	
				<button name="enviar"> Enviar </button>
			</form>
		</div>
		<div class="box resposta">
			<h2> Valor a ser Pago </h2>
            <?php 

                if($energia <= 100){
                    $real = $energia * 0.5;
                    
                }else if($energia <= 200){
                        $real = $energia * 0.7;
                   
               }else{

                 $real = $energia * 0.87;
                     
                
               }if ($energia <= 20 ){
                
                 $energia = 20;
                echo  "<p> Você pagara somente a taxa que é: ".number_format( $energia,2,",")."</p>";
            }
                
            echo  "<p> O valor a ser pago è: R$".number_format( $real,2,",")." Reais </p>"; 
            
            
            ?>
            

		</div>
	</div>
</body>
</html>