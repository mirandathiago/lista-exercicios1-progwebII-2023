<?php 

/*
	3- João deseja saber quantos números pares existem em um intervalo. Crie um formulário que permita ao usuário informar os dois números que delimitam o intervalo e, utilizando um laço de repetição do tipo for, calcule a quantidade de números pares nesse intervalo.
	Exemplo de entrada:
	Início do intervalo: 3
	Fim do intervalo: 15
	Exemplo de saída:
	Quantidade de números pares: 6
*/


    $inicio_intervalo = $_POST["inicio"] ?? 0;
	$fim_intervalo = $_POST["fim"] ?? 0;
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
		<h1>Números pares</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Números pares</h2>
			<form action="index.php" method="post">
                <label>
                   	Início do intervalo:
                        <input type="number" id="inicio" name="inicio" value="<?=$inicio_intervalo?>" required >
                </label>
				<label>
                   	Fim do intervalo:
                        <input type="number" id="fim" name="fim" value="<?=$fim_intervalo?>" required >
                </label>
				<button name="enviar"> Enviar </button>
				
				

			</form>
		</div>
		
		<div class="box resposta">
			<h2>Números pares</h2>
			<?php
				$metodo = $_SERVER["REQUEST_METHOD"];
				if($metodo == "POST"){
					$contador_par = 0;
					for($i = $inicio_intervalo; $i <= $fim_intervalo; $i++){
						if($i % 2 == 0){
							echo "<h6>{$i} </h6>";
							$contador_par++;
						} else echo "";
					}
					echo "<br><h4>A quantidade de números pares gerados é: {$contador_par}</h4>";
                }
            ?>
			
			
		</div>
	</div>
</body>
</html>